<?php

namespace App\Http\Controllers;

use App\Models\ContactPerson;
use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MeetingController extends Controller
{
    public function index()
    {
        Session::put('page', 'manage meeting');
        return view('meeting.index', ['meetings' => Meeting::all()]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'contact_person_id' => 'required',
                'meeting_title' => 'required',
                'purpose' => 'required',
                'result' => 'required',
            ], [
                'contact_person_id.required' => 'Contact Person name is required',
            ]);
            Meeting::createOrUpdate($request);
            return redirect('admin/manage/meeting')->with('msg', 'Congrats! Meeting information added successfully');
        }
        Session::put('page', 'add meeting');
        return view('meeting.create', ['persons' => ContactPerson::all()]);
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $validated = $request->validate([
                'contact_person_id' => 'required',
                'meeting_title' => 'required',
                'purpose' => 'required',
                'result' => 'required',
            ], [
                'contact_person_id.required' => 'Contact Person name is required',
            ]);
            Meeting::createOrUpdate($request, $id);
            return redirect('admin/manage/meeting')->with('msg', 'Congrats! Meeting information updated successfully');
        }
        return view('meeting.edit', ['meeting' => Meeting::find($id), 'persons' => ContactPerson::all()]);
    }

    public function getPerson(Request $request)
    {
        return response()->json(ContactPerson::where('company_id', $request->company_id)->get());
    }

    public function updateStatus($id)
    {

        $meeting = Meeting::find($id);
        if ($meeting->status == 0) {
            $meeting->update([
                'status' => 1,
            ]);
        } else {
            $meeting->update([
                'status' => 0,
            ]);
        }
        return back();
    }

    public function delete($id)
    {
        $meeting = Meeting::find($id);
        $meeting->delete();
        return back();
    }

    public function viewMeeting($id)
    {
        return view('meeting.details', ['meeting' => Meeting::find($id)]);
    }
}
