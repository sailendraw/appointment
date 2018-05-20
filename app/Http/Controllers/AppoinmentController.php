<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $AppointmentModel;
    public function __construct(Appointment $appointment)
    {
        $this->AppointmentModel = $appointment;
       }

    public function index()
    {
        $this->middleware('auth');
        return view('appointment.myappointment',['appointmentdata'=>$this->show(Auth::user()->id)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->AppointmentModel->fill($request->all());
        $this->AppointmentModel->save();
        return view('appointment.ConfirmAppoinment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return $this->AppointmentModel->patient_appoinment(Auth::user()->id);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function myappointment()
    {

    }
    public function create_appointment_ajax_request(Request $request)
    {
        $this->AppointmentModel->fill($request->all());
        if ($this->AppointmentModel->save()) {
            return 'success';
        }
        else{
            return 'failed';
        }
    }
}
