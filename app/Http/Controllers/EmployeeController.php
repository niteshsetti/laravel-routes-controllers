<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Salary;

class EmployeeController extends Controller
{
    public function salary()
    {
        $employee = new Employee;
        $employee->name = "Test Name";
        $employee->phone = "100000";
        $employee->save();

        $salary = new Salary;
        $salary->salary = '123456789';
        $salary->employee_id = '1';
        $employee->salary()->save($salary);
    }
    public function index()
    {
        $employee = Employee::find(1);

       // get employee data from Salary model
       $employee = Salary::find(1)->employee;
       echo $employee;

       // get Salary number from employee model
       $salary = employee::find(1)->salary;
       echo $salary;
       $salarys = employee::find(1)->salar;
       echo $salarys;
       $salaryss = employee::find(1)->salars;
       echo $salaryss;
    }

}
