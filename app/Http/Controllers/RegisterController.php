<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(Request $request) {

        $data = array();

        return View('register.index', $data);
    }

}
