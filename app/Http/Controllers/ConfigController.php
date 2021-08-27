<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function aboutUsPage(){
        return view('admin.config.aboutUs');
    }

    public function contactUsPage(){
        return view('admin.config.contactUs');
    }

    public function policyPage(){
        return view('admin.config.policy');
    }
}
