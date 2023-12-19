<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Repositories\EmployeeRespository;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function __construct(protected EmployeeRespository $employeeRespository)
    {        
    }

    //to get list of all employees
    public function getAllEmployees()
    {
        return $this->employeeRespository->getEmployees();
    }

    //to get one of all employees
    public function getEmployee(Request $request)
    {
        return $this->employeeRespository->getEmployee($request->id);
    }

    //to add new employee
    public function createEmployees(EmployeeRequest $employeeRequest)
    {
        if(isset($employeeRequest['photo']) && $employeeRequest['photo']->isValid()){
            $destinationPath = 'uploads';
            $employeeRequest['photo']->move($destinationPath,$employeeRequest['photo']->getClientOriginalName());
            $employeeRequest['photo_url'] = $destinationPath.'/'.$employeeRequest['photo']->getClientOriginalName();
        }
        return $this->employeeRespository->createEmployees($employeeRequest);
    }

    //to update employee
    public function updateEmployees(UpdateEmployeeRequest $updateEmployeeRequest)
    {
        if(isset($updateEmployeeRequest['photo']) && $updateEmployeeRequest['photo']->isValid()){
            $destinationPath = 'uploads';
            $updateEmployeeRequest['photo']->move($destinationPath,$updateEmployeeRequest['photo']->getClientOriginalName());
            $updateEmployeeRequest['photo_url'] = $destinationPath.'/'.$updateEmployeeRequest['photo']->getClientOriginalName();
        }
        $isUpdated = $this->employeeRespository->updateEmployees($updateEmployeeRequest);

        if($isUpdated==true){
            return response()->json(['status'=>'Successfully updated']);
        }else{
            return response()->json(['status'=>'Something went wrong']);
        }
        
    }

    //to Delete Employee
    public function deleteEmployees(Request $request)
    {
        $isDeleted = $this->employeeRespository->deleteEmployees($request->id);
        if($isDeleted==true){
            return response()->json(['status'=>'Successfully deleted']);
        }else{
            return response()->json(['status'=>'Something went wrong']);
        }
    }

    //////////////////////Web call///////////////////
    public function getListOfEmployee()
    {
        $employeeData = $this->getAllEmployees();
        return view('employee.employeeList')->with('employeeData', json_decode($employeeData, true));;
    }
}
