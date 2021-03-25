<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(Request $request) {

        $data = array();

        return View('photo.index', $data);
    }

    public function detail(Request $request) {

        $data = array();

        return View('photo.detail', $data);
    }
}
