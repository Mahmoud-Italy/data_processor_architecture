<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppCtrl extends Controller
{
    public function index()
    {
    	return view('api.docs.app');
    }


}
