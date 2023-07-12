<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    protected $fillable=['contact_person_id','meeting_title','purpose','discussion','result','next_meeting_date_time','status'];

    public function contactPerson(){
        return $this->belongsTo(ContactPerson::class,'contact_person_id');
    }

    public static function createOrUpdate($request,$id=null){
        if($id){
            $meeting=Meeting::find($id);
        }else{
            $meeting=new Meeting();
        }
        $meeting->contact_person_id=$request->contact_person_id;
        $meeting->meeting_title=$request->meeting_title;
        $meeting->purpose=$request->purpose;
        $meeting->discussion=$request->discussion;
        $meeting->result=$request->result;
        $meeting->next_meeting_date_time=$request->next_meeting_date_time;
        $meeting->status=$request->status;
        $meeting->save();
    }
}
