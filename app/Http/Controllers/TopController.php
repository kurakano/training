<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(Request $request) {

        $data = array();

        return View('top.index', $data);
    }
}
