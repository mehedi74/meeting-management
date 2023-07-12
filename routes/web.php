<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactPersonController;
use App\Http\Controllers\MeetingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::match(['get', 'post'], 'admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::middleware('admin.check')->group(function () {

    //admin routes...
    Route::get('/', [AdminController::class, 'home'])->name('home');
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::match(['get', 'post'], 'admin/update/details', [AdminController::class, 'updateDetails'])->name('admin.update.details');
    Route::match(['get', 'post'], 'update/password', [AdminController::class, 'updatePassword'])->name('admin.update.password');
    Route::post('check-current-password', [AdminController::class, 'checkCurrentPassword'])->name('admin.check-current-password');

    //company management routes...
    Route::match(['get', 'post'], 'admin/create/company', [CompanyController::class, 'create'])->name('company.create');
    Route::get('admin/manage/company', [CompanyController::class, 'index'])->name('company.index');
    Route::get('admin/manage/company/status{id}', [CompanyController::class, 'updateStatus'])->name('company.update.status');
    Route::match(['get', 'post'], 'admin/edit/company{id}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::get('/admin/company/delete{id}', [CompanyController::class, 'delete'])->name('company.delete');

    //contact person management routes...
    Route::match(['get', 'post'], 'admin/create/person', [ContactPersonController::class, 'create'])->name('person.create');
    Route::get('admin/manage/person', [ContactPersonController::class, 'index'])->name('person.index');
    Route::get('admin/manage/person/status{id}', [ContactPersonController::class, 'updateStatus'])->name('person.status.update');
    Route::match(['get', 'post'], 'admin/edit/person{id}', [ContactPersonController::class, 'edit'])->name('person.edit');
    Route::get('/admin/person/delete{id}', [ContactPersonController::class, 'delete'])->name('person.delete');

    //meeting routes...
    Route::match(['get', 'post'], 'admin/create/meeting', [MeetingController::class, 'create'])->name('meeting.create');
    Route::post('select-all-person', [MeetingController::class, 'getPerson'])->name('select-all-person');
    Route::get('admin/manage/meeting', [MeetingController::class, 'index'])->name('meeting.index');
    Route::get('admin/manage/meeting/status{id}', [MeetingController::class, 'updateStatus'])->name('meeting.status.update');
    Route::match(['get', 'post'], 'admin/edit/meeting{id}', [MeetingController::class, 'edit'])->name('meeting.edit');
    Route::match(['get', 'post'], 'admin/view/meeting{id}', [MeetingController::class, 'viewMeeting'])->name('meeting.view');
    Route::get('/admin/meeting/delete{id}', [MeetingController::class, 'delete'])->name('meeting.delete');

});


