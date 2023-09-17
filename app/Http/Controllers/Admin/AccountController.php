<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $usersCount = User::whereRoleIs(['student'])->count();
        $adminsCount = User::whereRoleIs(['admin'])->count();
        return  view('admin.dashboard',compact('usersCount','adminsCount'));
    }
   
}
