<?php
namespace App\Repositories;

use App\Models\ProductModel;
use Illuminate\Support\Carbon;

  class ProductRespository {

    public function getProducts()
    {
        return ProductModel::all(); //get along with cate using eloquent ORM model
    }

    public function getEmployee($empID)
    {
        return ProductModel::find($empID);
    }

    public function createEmployees($employeeData)
    {
        $employeePayload = array(
            'name' => $employeeData['name'],
            'age' => $employeeData['age'],
            'email' => $employeeData["email"],
            'dob' => Carbon::parse($employeeData['date_of_birth'])->format('Y-m-d H:i:s'),
            'address' => ( isset($employeeData['address']) ) ? $employeeData['address'] : '',
            'photo' => ( isset($employeeData['photo_url']) ) ? $employeeData['photo_url'] : '',
        );
        return ProductModel::create($employeePayload);
    }

    public function updateEmployees($employeeData)
    {
        $employeePayload = array(
            'name' => $employeeData['name'],
            'age' => $employeeData['age'],
            'email' => $employeeData["email"],
            'dob' => Carbon::parse($employeeData['date_of_birth'])->format('Y-m-d H:i:s'),
            'address' => ( isset($employeeData['address']) ) ? $employeeData['address'] : '',
            'photo' => ( isset($employeeData['photo_url']) ) ? $employeeData['photo_url'] : '',
        );
        return ProductModel::where('id', '=', $employeeData['id'])->update($employeePayload);
    }

    public function deleteEmployees($employeeId)
    {
        return ProductModel::where('id', '=', $employeeId)->delete();
    }

  }
?>