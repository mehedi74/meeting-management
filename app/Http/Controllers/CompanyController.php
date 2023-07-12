<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    public function index()
    {
        Session::put('page', 'manage company');
        return view('company.index', ['companies' => Company::all()]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'company_name' => 'required',
                'address' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
                'web_address' => 'required',
            ]);
            Company::createOrUpdate($request);
            return redirect('admin/manage/company')->with('msg', 'Congrats! Company added successfully');
        }
        Session::put('page', 'add company');
        return view('company.create');
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'company_name' => 'required',
                'address' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
                'web_address' => 'required',
            ]);
            Company::createOrUpdate($request, $id);
            return redirect('admin/manage/company')->with('msg', 'Congrats! Company information updated successfully');
        }
        return view('company.edit', ['company' => Company::find($id)]);
    }

    public function updateStatus($id)
    {
        $company = Company::find($id);
        if ($company->status == 0) {
            $company->update([
                'status' => 1,
            ]);
        } else {
            $company->update([
                'status' => 0,
            ]);
        }
        return back();
    }

    public function delete($id)
    {
        $company = Company::find($id);
        $company->delete();
        return back();
    }
}
