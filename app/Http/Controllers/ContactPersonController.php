<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\ContactPerson;

class ContactPersonController extends Controller
{
    public function index()
    {
        Session::put('page', 'manage person');
        return view('contact-person.index', ['persons' => ContactPerson::all()]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'company_id' => 'required',
                'person_name' => 'required',
                'phone_number' => 'required',
                'person_designation' => 'required',
                'email' => 'required',
                'whatsapp' => 'required',
            ], [
                'company_id.required' => 'Company name is required',
            ]);
            ContactPerson::createOrUpdate($request);
            return redirect('admin/manage/person')->with('msg', 'Congrats! Contact person information added successfully');
        }
        Session::put('page', 'add person');
        return view('contact-person.create');
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'company_id' => 'required',
                'person_name' => 'required',
                'phone_number' => 'required',
                'person_designation' => 'required',
                'email' => 'required',
                'whatsapp' => 'required',
            ], [
                'company_id.required' => 'Company name is required',
            ]);
            ContactPerson::createOrUpdate($request, $id);
            return redirect('admin/manage/person')->with('msg', 'Congrats! Person information updated successfully');
        }
        return view('contact-person.edit', ['person' => ContactPerson::find($id)]);
    }

    public function updateStatus($id)
    {

        $person = ContactPerson::find($id);
        if ($person->status == 0) {
            $person->update([
                'status' => 1,
            ]);
        } else {
            $person->update([
                'status' => 0,
            ]);
        }
        return back();
    }

    public function delete($id)
    {
        $person = ContactPerson::find($id);
        $person->delete();
        return back();
    }
}
