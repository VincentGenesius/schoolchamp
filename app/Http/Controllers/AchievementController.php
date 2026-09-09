<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        $AchievementList = [
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
            'title'           => 'Hall of Fame',
            'AchievementList' => $AchievementList,
        ]);
    }

    public function create()
    {
        return view('achievement.create', [
            'title' => 'Add New Hall of Fame',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi dan simpan data (nanti dihubungkan ke Database/Model)
        return redirect()->route('achievement.index');
    }

    public function edit($id = null)
    {
        // Dummy data untuk dikirim ke view edit
        $Achievement = [
            'id'          => $id ?? 1,
            'event'       => 'International Physics Olympiad (IPhO) 2026',
            'field'       => 'Theoretical & Experimental Physics',
            'participant' => 'Julian Vance',
            'date'        => '2026-05-18',
            'achievement' => '2nd Winner - Silver Medal',
        ];

        return view('achievement.edit', [
            'title'      => 'Edit Hall of Fame',
            'Achievement' => $Achievement,
        ]);
    }

    public function update(Request $request, $id)
    {
        // Logika update data
        return redirect()->route('achievement.index');
    }

    public function destroy($id)
    {
        // Logika hapus data
        return redirect()->route('achievement.index');
    }
}