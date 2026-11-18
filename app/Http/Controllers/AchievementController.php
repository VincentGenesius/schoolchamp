<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index(Request $request)
    {
        $title = "SchoolChamp - Achievement";

        $query = Competition::whereNotNull('achievement')->where('achievement', '!=', '-');

        if ($request->filled('search')) {
            $query->where('event', 'like', '%' . $request->search . '%');
        }
        
        if ($request->filled('month') || $request->filled('year')) {
            if ($request->filled('year')) {
                $query->whereYear('date', $request->year);
            }
            if ($request->filled('month')) {
                $query->whereMonth('date', $request->month);
            }
        }

        $achievements = $query->latest()->paginate(12)->withQueryString();

        return view('achievements.index', [
            'title' => $title,
            'achievements' => $achievements
        ]);
    }
}

