<?php

namespace App\Console\Commands;

use SplFileObject;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ImportProductsByFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importProduct:cron {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import product data from a CSV file into the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $file = $this->argument('file');
     
        
        $productCSV = new SplFileObject($file, 'r');
       //
        //print_r($productCSV);exit();
        $productCSV->setFlags(SplFileObject::READ_CSV 
  | SplFileObject::SKIP_EMPTY 
  | SplFileObject::READ_AHEAD 
  | SplFileObject::DROP_NEW_LINE);
  $productCSV->setCsvControl(';');

        $header = null;
        $rows = [];
       
        foreach ($productCSV as $row) {
            if (!$header) {
                $rowArr = explode(',',$row[0]);
                $rowArr[0] = 'name';
                $rowArr[2] = 'category_id';
                $row = $rowArr;
                $header = $row;
            } else {
                
                 $rowArr = explode(',',$row[0]);
                 $catData = CategoryModel::where('name',$rowArr[2])->pluck('id');
                 $rowArr[2] = $catData[0];
                 $row = $rowArr;
                $rows[] = array_combine($header, $row);
            }
        }
        //print_r($rows);exit();
        $validator = Validator::make($rows, [
            // Define your validation rules for each column here
            //'name' => 'required'
            // 'price' => ['required'],
            // 'category' => ['nullable'],
            // Add more rules as needed
        ]);

        if ($validator->fails()) {
            $this->error('Validation failed. Aborting import.');
            return;
        }

        try {
            DB::beginTransaction();

            foreach ($rows as $row) {
                // Insert each row into the database
               // $this->createProductPayload($row);
               //ProductModel::with('');
               ProductModel::create($row);
                //DB::table('products')->insert($row);
            }

            DB::commit();
            $this->info('Products imported successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            $this->error('Error importing products: ' . $e->getMessage());
        }
    }

    function createProductPayload($row) {
        return [
            "name"=> $row[0]
        ];
    }
}
