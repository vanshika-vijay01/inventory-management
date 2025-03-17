<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppUsers extends Controller
{
    public function index(){
        return view('layouts.login');
    }

    public function verifyAppUsersAndLogin(Request $request){
        \Log::info($request);
        return ['success' => true, 'message' => 'operation successfull !!'];
    }
}
