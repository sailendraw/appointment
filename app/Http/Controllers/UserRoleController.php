<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserRoleController extends Controller
{
    public function save_role()
    {
        $Role = New Role();
        $Role->name = Input::get('role_name');
        $Role->created_by = Auth::user()->name;
        $Role->save();
        $pageController = new PageController();
        return $pageController->create_user_role();
    }
    public function save_user_profile()
    {

    }

}
