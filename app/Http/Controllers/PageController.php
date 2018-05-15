<?php
/**
 * Created by PhpStorm.
 * User: sailendra-dev
 * Date: 10/05/18
 * Time: 2:58 PM
 */

namespace App\Http\Controllers;


use App\SiteConfig;
use function Couchbase\defaultDecoder;

class PageController extends Controller
{


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * returns home page
     */
    public function home()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login.login');
    }
    public function site_configuration()
    {
        $site_config_data = SiteConfig::all('id','name','url','slogan')->first();

        return view('Administrator.site_configuration',['id'=>$site_config_data->id,'name'=>$site_config_data->name,'url'=>$site_config_data->url,'slogan'=>$site_config_data->slogan]);
    }
    public function create_user_role()
    {

        return view('Administrator.user_role');


    }
}