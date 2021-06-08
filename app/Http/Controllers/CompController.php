<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompController extends Controller
{
    public function index(Request $request) {

        $data = array();

        return View('comp.index', $data);
    }
}
