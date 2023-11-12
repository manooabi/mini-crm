<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CompanyFormRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
  
    public function index()
    {
        $company = Company::all();
        return view('admin.company.index',compact('company'));
    }
    public function create()
    {
        return view('admin.company.create');
    }
    public function store(CompanyFormRequest $request)
    {
        $data = $request -> validated();

        $company = new Company;
        $company-> name =  $data['name'];
        $company-> email =  $data['email'];
        if($request -> hasfile('logo'))
        {
            $file = $request -> file('logo');
            $filename = time(). '.'  .$file ->getClientOriginalExtension();
            $file -> storeAs('public/logo/company', $filename);
            $company->logo = $filename;
        }
        $company-> website =  $data['website'];
        $company -> save();

        $data = ['name' => "Manoo Abhilash"];

        Mail::send('mail', $data, function ($message) {
            $message->to('abc@gmail.com', 'Mini CRM')
                    ->subject('Company Registration');
            $message->from('xyz@gmail.com', 'Manoo');
        });

        return redirect('admin/company')-> with('message','Company added succesfully');
    }
    public function edit($company_id)
    {
        $company =  Company::find($company_id);
        return  view('admin.company.edit',compact('company'));
    }
    public function update(CompanyFormRequest $request,$company_id)
    {
        $data = $request -> validated();

        $company = Company::find($company_id);
        $company->name = $data['name'];
        $company-> email =  $data['email'];
        if($request -> hasfile('logo'))
        {
            $destination = 'public/logo/company' .$company -> logo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request -> file('logo');
            $filename = time(). '.'  .$file ->getClientOriginalExtension();
            $file -> storeAs('public/logo/company', $filename);
            $company->logo = $filename;
        }
        $company-> website =  $data['website'];
        $company -> update();

        return redirect('admin/company')-> with('message','Company updated succesfully');
    }
    public function destroy(Request $request)
    {
        $company = Company::find($request -> company_delete_id);
        if($company)
        {
            $destination = 'public/logo/company' .$company -> logo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $company -> employees() -> delete();
            $company -> delete();
            return redirect('admin/company')-> with('message','company Deleted succesfully');
        }
        else
        {
            return redirect('admin/company')-> with('message','No company Id Found');
        }
    }
}
