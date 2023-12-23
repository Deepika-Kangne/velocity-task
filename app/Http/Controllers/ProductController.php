<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Facades\ProductFacade;
use App\Services\ProductService;
use App\DTOs\NumericSquareRootDTO;
use App\Http\Requests\YourRequestName;
use App\Repositories\ProductRespository;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\NumericSquareRootRequest;

class ProductController extends Controller
{

    public function __construct(protected ProductRespository $productRespository)
    {        
    }

    //to get list of all employees
    public function getAllProducts()
    {
        return $this->productRespository->getProducts();
    }

    //to get one of all employees
    public function getEmployee(Request $request)
    {
        return $this->productRespository->getEmployee($request->id);
    }

    // //////////////////////Web call///////////////////
    public function getListOfProducts()
    {
        $productData = $this->getAllProducts();
        return view('product.productList')->with('productData', json_decode($productData, true));;
    }

    ////////////////Get Square Root of ///////////////////
    public function getSquareRootOfNumber(NumericSquareRootRequest $numericSquareRootRequest)
    {
        $numericSquareRootPayload = NumericSquareRootDTO::fromRequest($numericSquareRootRequest);
        $result = ProductFacade::getNumericSquareRoot($numericSquareRootPayload);
        return response()->json(['squareRoot' => $result]); 
    }
}
