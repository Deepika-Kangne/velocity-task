<?php

namespace App\Services;

use App\DTOs\NumericSquareRootDTO;
use App\Exceptions\FailedToSquareRoot;
use App\Models\ProductModel;

class ProductService 
{
    public function __construct()
    {
    }

    /*
     * Creation of new purchase order
     */
    public function getNumericSquareRoot(NumericSquareRootDTO $numericSquareRootDTO)
    {
        try {
            $Numvariable = $numericSquareRootDTO->squareNo;
            if(is_numeric($Numvariable)){
                $squareRoot = sqrt($Numvariable);
                return $squareRoot;
            }else{
                throw new FailedToSquareRoot('String required');
            }
           
        } catch (\Throwable $th) {
           throw new FailedToSquareRoot($th->getMessage());
        }
    }

    public function getAllProduct()
    {
        try {
            return ProductModel::all();
           
        } catch (\Throwable $th) {
           throw new FailedToSquareRoot($th->getMessage());
        }
    }
   
}
