<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request) {

        $data = array();

        return View('schedule.index', $data);
    }
}
