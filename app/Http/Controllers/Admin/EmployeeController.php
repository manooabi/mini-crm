<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EmployeeFormRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
     
    public function index()
    {
        $employees = Employee::all();
        //return 'Hey';
        return view('admin.employee.index',compact('employees'));
    }
    public function create()
    {
        $company = Company::all();
        return view('admin.employee.create',compact('company'));
    }
    public function store(EmployeeFormRequest $request)
    {
        $data = $request -> validated();

        $employee = new Employee();

        $employee -> company_id = $data['company_id'];
        $employee -> firstname = $data['firstname'];
        $employee -> lastname = $data['lastname'];
        $employee -> email = $data['email'];
        $employee -> phone = $data['phone'];
        $employee -> save();
        return redirect('admin/employees') -> with('message','Employee Added Successfully');
    }
    public function edit($employee_id)
    {
        $company = Company::all();
        $employee = Employee::find($employee_id);
        return view('admin.employee.edit',compact('employee','company'));
    }
    public function update(EmployeeFormRequest $request,$employee_id)
    {

        $data = $request -> validated();

        $employee = Employee::find($employee_id);

        $employee -> company_id = $data['company_id'];
        $employee -> firstname = $data['firstname'];
        $employee -> lastname = $data['lastname'];
        $employee -> email = $data['email'];
        $employee -> phone = $data['phone'];
        $employee -> update();

        return redirect('admin/employees') -> with('message','Employee Updated Successfully');
    }
    public function destroy($employee_id)
    {
        $employee = Employee::find($employee_id);
        $employee -> delete();
        return redirect('admin/employees') -> with('message','Employee Deleted Successfully');
    }
}
