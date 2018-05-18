<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Doctor;
use App\Http\Requests\Doctor as DoctorRequest;
use App\SiteConfig;

/**
 * Class DoctorController
 * @package App\Http\Controllers
 */
class DoctorController extends Controller
{
    /**
     * @var
     */
    public $doctor;
    public function __construct(Doctor $doctor)
    {
        $this->doctor=$doctor;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('Auth');
        $doctorData = $this->doctor->getAll();
        $site_config_data = SiteConfig::all('id','name','url','slogan')->first();
        return view('doctor.index',['doctorData'=>$doctorData,'sitename'=>$site_config_data->name,'url'=>$site_config_data->url,'slogan'=>$site_config_data->slogan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware('Auth');
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( DoctorRequest $request)
    {
        $UsersDetail = (object)$request->all();
        $user = [
            'name' => $UsersDetail->first_name,
            'email' => $UsersDetail->email,
            'role'=>$UsersDetail->role,
            'password' => Hash::make($UsersDetail->password),

        ];
        $registerdoctor = new RegisterController();
        $userid=$registerdoctor->RegisterDoctor($user);
       $newArray = $request->all();
       $newArray['user_id']=$userid->id;

        $this->middleware('auth');
            $doctorModel =$this->doctor->saveDoctor($newArray);

        if (!$doctorModel) {
            return redirect()->back()->withError('Error while adding ');
        }

        return view('doctor.index', $doctorModel->id)->withSuccess(' added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = $this->doctor->findWithDetail($id);


        return view('doctor.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->middleware('auth');
        $doctor      = $this->doctor->findWithDetail($id);


        return view('doctor.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorRequest $request, $id)
    {
        $this->middleware('auth');
        $updated = $this->doctor->updateDoctor($id, $request->all());

        if (!$updated) {
            return redirect()->route('doctor.index')->withError("Doctor Details Not Updated");
        }

        return redirect()->route('Doctor.show',$id)->withSuccess("Doctor Details Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->middleware('auth');
        //
    }
    public function listdoctors()
    {
        $doctorData = $this->doctor->getAll();
        $site_config_data = SiteConfig::all('id','name','url','slogan')->first();
        return view('doctor.listdoctors',['doctorData'=>$doctorData,'sitename'=>$site_config_data->name,'url'=>$site_config_data->url,'slogan'=>$site_config_data->slogan]);
    }
}
