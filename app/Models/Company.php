<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable=['company_name','address','official_email','phone_number','web_address','status'];

    public static function createOrUpdate($request,$id=null){
        if($id){
            $company=Company::find($id);
        }else{
            $company=new Company();
        }
        $company->company_name=$request->company_name;
        $company->address=$request->address;
        $company->official_email=$request->email;
        $company->phone_number=$request->phone_number;
        $company->web_address=$request->web_address;
        $company->status=$request->status;
        $company->save();
    }
}
