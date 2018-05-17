<?php

namespace App\Http\Controllers;
use App\SiteConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\PageController as pagecontroller;
class SiteConfigController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * insert site wide configuration data
     * if data already exist then update
     * if data doesnot exist then create new record
     */
    public function SaveConfig()
    {
            $redirect = new pagecontroller();
             $id      = Input::get('site_id');
          if(empty($id) || is_null($id))
          {
              $site_config          = New SiteConfig();
              $site_config->url     = Input::get('site_url');
              $site_config->name    = Input::get('site_name');
              $site_config->slogan  = Input::get('site_slogan');
              $site_config->save();
          }
          else
          {
              $site_config          = SiteConfig::find($id);
              $site_config->url     = Input::get('site_url');
              $site_config->name    = Input::get('site_name');
              $site_config->slogan  = Input::get('site_slogan');
              $site_config->save();
          }
        return $redirect->site_configuration();
    }
}
