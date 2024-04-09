<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.index');
    }

    public function newEmployee(){
        return view('employee.newEmployee');
    }

    public function saveNewEmployee(Request $request){
        dd($request);
       /* $data = $request->validate([
            'firstname'=> 'required',
            'middlename'=> 'nullable',
            'lastname' => 'required',
            'birthdate' => 'required',
            'email'=> 'nullable',
            'phone' => 'nullable',
            'address' => 'nullable'
        
        
        ]);

        $new_Employee = Employee::newEmployee($data);*/

        //return redirect(route('employee.index'));
    }
  /*  public function saveNewEmployee(Request $request){
        $data = $request->validate([
            'firstname'=> 'required',
            'middlename'=> 'nullable',
            'lastname' => 'required',
            'birthdate' => 'required',
            'email'=> 'nullable',
            'phone' => 'nullable',
            'address' => 'nullable'
        
        
        ]);

        $new_Employee = Employee::newEmployee($data);

        return redirect(route('employee.index'));

    }
*/

}
