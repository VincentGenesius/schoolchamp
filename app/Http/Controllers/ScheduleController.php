<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $title = "SchoolChamp - Schedule";

        $query = Competition::query();

        if ($request->filled('search')) {
            $query->where('event', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $schedules = $query->orderBy('date', 'asc')->paginate(12)->withQueryString();

        return view('schedules.index', [
            'title' => $title,
            'schedules' => $schedules
        ]);
    }
}
