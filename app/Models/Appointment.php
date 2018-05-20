<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Appointment extends Model
{
    protected $fillable = [
        'time',
        'doctor',
        'userid',
        'description'
    ];
    public function doctor($doctorid)
    {

return      DB::table('appointments')
    ->select('doctors.*')
    ->Join('doctors','doctors.id','=','appointments.doctor')
    ->where(['appointments.userid'=>$doctorid])
    ->groupBy('doctors.id')
    ->get();


    }
    public function doctorspatient($patientid)
    {
        return      DB::table('appointments')
            ->select('*')
            ->leftJoin('doctors','doctors.id','=','appointments.doctor')
            ->where(['appointments.doctor'=>$patientid])
            ->get();
    }
    public function patient_appoinment($patientid)
    {


        return  DB::table('appointments')
            ->select('*')
            ->Join('doctors','doctors.id','=','appointments.doctor')
            ->where(['appointments.userid'=>$patientid])
            ->get();



    }
}
