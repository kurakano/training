<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(Request $request) {

        $data = array();

        return View('register.index', $data);
    }

    public function edit_series(Request $request) {

        $data = array();

        return View('register.edit.series', $data);
    }

    public function edit_pose(Request $request) {

        $data = array();

        return View('register.edit.pose', $data);
    }

    public function edit_member(Request $request) {

        $data = array();

        return View('register.edit.member', $data);
    }

}
