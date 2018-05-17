<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\SiteConfig;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site_config_data = SiteConfig::all('id','name','url','slogan')->first();
        return view('home',['sitename'=>$site_config_data->name,'url'=>$site_config_data->url,'slogan'=>$site_config_data->slogan]);
    }
}
