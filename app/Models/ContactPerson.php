<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    use HasFactory;

    protected $fillable=['company_id','name','phone_number','designation','email ','whatsapp','status'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public static function createOrUpdate($request,$id=null){
        if($id){
            $person=ContactPerson::find($id);
        }else{
            $person=new ContactPerson();
        }
        $person->company_id=$request->company_id;
        $person->name=$request->person_name;
        $person->phone_number=$request->phone_number;
        $person->designation=$request->person_designation;
        $person->email=$request->email;
        $person->whatsapp=$request->whatsapp;
        $person->status=$request->status;
        $person->save();
    }
}
