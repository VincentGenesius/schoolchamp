<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        $title = "SchoolChamp - Achievement";
        $achievements = Competition::whereNotNull('achievement')->where('achievement', '!=', '-')->get();

        return view('achievement.index', [
            'title' => $title,
            'achievements' => $achievements
        ]);
    }
}

