<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        $achievementList = [
            [
                'id'          => 1,
                'event'       => 'WorldSkills Shanghai 2026',
                'field'       => 'IT Software Solutions for Business',
                'participant' => 'Kaelen Voss',
                'date'        => '13/05/2026',
                'achievement' => '1st Winner - Gold Medal',
            ],
            [
                'id'          => 2,
                'event'       => 'International Physics Olympiad (IPhO) 2026',
                'field'       => 'Theoretical & Experimental Physics',
                'participant' => 'Julian Vance',
                'date'        => '18/05/2026',
                'achievement' => '2nd Winner - Silver Medal',
            ],
        ];

        return view('achievement.index', [
            'title'           => 'Achievement',
            'hallOfFameList'  => $achievementList,
            'achievementList' => $achievementList,
        ]);
    }

    public function create()
    {
        return view('achievement.create', [
            'title' => 'Add New Achievement',
        ]);
    }

    public function store(Request $request)
    {
        return redirect()->route('achievements.index');
    }

public function show($id = null)
{
    $achievement = [
        'id'          => $id ?? 1,
        'event'       => 'WorldSkills Shanghai 2026',
        'field'       => 'IT Software Solutions for Business',
        'participant' => 'Kaelen Voss',
        'date'        => '13/05/2026',
        'achievement' => '1st Winner - Gold Medal',
    ];

    return view('achievement.show', [
        'title'       => 'Details Achievement',
        'achievement' => $achievement,
    ]);
}

    public function edit($id = null)
    {
        $achievement = [
            'id'          => $id ?? 1,
            'event'       => 'WorldSkills Shanghai 2026',
            'field'       => 'IT Software Solutions for Business',
            'participant' => 'Klain Xee',
            'date'        => '2026-05-13',
            'achievement' => '1st Winner - Gold Medal',
        ];

        return view('achievement.edit', [
            'title'       => 'Edit Achievement',
            'achievement' => $achievement,
        ]);
    }

    public function update(Request $request, $id = null)
    {
        return redirect()->route('achievements.index');
    }

    public function destroy($id)
    {
        return redirect()->route('achievements.index');
    }
}

