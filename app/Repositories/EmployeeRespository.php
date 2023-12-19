<?php
namespace App\Repositories;

use App\Models\EmployeeModel;
use Illuminate\Support\Carbon;

  class EmployeeRespository {

    public function getEmployees()
    {
        return EmployeeModel::all();
    }

    public function getEmployee($empID)
    {
        return EmployeeModel::find($empID);
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
        return EmployeeModel::create($employeePayload);
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
        return EmployeeModel::where('id', '=', $employeeData['id'])->update($employeePayload);
    }

    public function deleteEmployees($employeeId)
    {
        return EmployeeModel::where('id', '=', $employeeId)->delete();
    }

  }
?>