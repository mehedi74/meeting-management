<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Company;
use App\Models\ContactPerson;
use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function home()
    {
        Session::put('page', 'home');
        return view('home.index',[
            'toatlCompany'=>Company::count(),
            'totalPerson'=>ContactPerson::count(),
            'totalMeeting'=>Meeting::count(),
        ]);
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $rules = [
                'admin_email' => 'required|max:255',
                'admin_password' => 'required',
            ];
            $erroerMessages = [
                'admin_email.required' => 'Email is required.',
                'admin_email.admin_email' => 'Please give correct email format',
                'admin_password.required' => 'Password is required',
            ];
            $this->validate($request, $rules, $erroerMessages);
            $data = $request->all();
            if (Auth::guard('admin')->attempt(['email' => $data['admin_email'], 'password' => $data['admin_password'], 'status' => 1])) {
                return redirect('/');
            } else {
                return back()->with('msg', 'Invalid username or password');
            }
        }
        return view('login.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function updateDetails(Request $request)
    {
        Session::put('page', 'update_deatils');
        if ($request->isMethod('post')) {
            $rules = [
                'admin_name' => 'required',
                'admin_mobile' => 'required|numeric',
            ];
            $customMessage = [
                'admin_name.required' => 'Admin Name is Required',
                'admin_mobile.required' => 'Mobile is Required',
                'admin_name.numeric' => 'Please enter number 0-9',
            ];
            $this->validate($request, $rules, $customMessage);
            Admin::updateDetails($request);
            return back()->with('msg', 'Congrats! Details updated Successfully');
        }
        $adminDetails = Admin::where('id', Auth::guard('admin')->user()->id)->first();
        return view('setting.update_details', ['adminDetails' => $adminDetails]);
    }

    public function updatePassword(Request $request)
    {
        Session::put('page', 'update_password');
        if ($request->isMethod('POST')) {
            $validated = $request->validate([
                'current_password' => 'required',
                'confirm_password' => 'required',
                'new_password' => 'required',
            ]);

            $admin = $request->all();
            if (Hash::check($admin['current_password'], Auth::guard('admin')->user()->password)) {
                if ($admin['new_password'] == $admin['confirm_password']) {
                    Admin::where('id', Auth::guard('admin')->user()->id)->update([
                        'password' => bcrypt($admin['new_password']),
                    ]);
                    return back()->with('msg', 'Congrats! Password updated Successfully');
                } else {
                    return back()->with('msg', 'New Passsword and Confirm Password do not match');
                }
            } else {
                return back()->with('msg', 'Current Password is not Correct');
            }
        }
        $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        return view('setting.update_password', ['adminDetails' => $adminDetails]);
    }

    public function checkCurrentPassword(Request $request)
    {
        $admin = $request->all();
        if (Hash::check($admin['current_password'], Auth::guard('admin')->user()->password)) {
            return 1;
        } else {
            return 0;
        }
    }
}
