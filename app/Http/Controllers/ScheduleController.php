<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $title = "SchoolChamp - Schedule";
        $schedules = Competition::orderBy('date', 'asc')->get();

        return view('schedules.index', [
            'title' => $title,
            'schedules' => $schedules
        ]);
    }
}
