<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        $title = "SchoolChamp - Achievement";

        $achievementList = [
            [
                'id' => 1,
                'event' => 'WorldSkills Shanghai 2026',
                'field' => 'IT Software Solutions for Business',
                'participant' => 'Kaelen Voss',
                'date' => '13/05/2026',
                'achievement' => '1st Winner - Gold Medal',
            ],
            [
                'id' => 2,
                'event' => 'International Physics Olympiad (IPhO) 2026',
                'field' => 'Theoretical & Experimental Physics',
                'participant' => 'Julian Vance',
                'date' => '18/05/2026',
                'achievement' => '2nd Winner - Silver Medal',
            ],
        ];

        return view('achievement.index', [
            'title' => $title,
            'hallOfFameList' => $achievementList,
            'achievementList' => $achievementList,
        ]);
    }
}

