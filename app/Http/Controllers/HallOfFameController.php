<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HallOfFameController extends Controller
{
    public function index()
    {
        $hallOfFameList = [
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

        return view('hall-of-fame.index', [
            'title'          => 'Hall of Fame',
            'hallOfFameList' => $hallOfFameList,
        ]);
    }

    public function create()
    {
        return view('hall-of-fame.create', [
            'title' => 'Add New Achievement',
        ]);
    }

    public function store(Request $request)
    {
        return redirect()->route('hall-of-fame.index');
    }

    public function edit($id = null)
    {
        $hallOfFame = [
            'id'          => $id ?? 1,
            'event'       => 'International Physics Olympiad (IPhO) 2026',
            'field'       => 'Theoretical & Experimental Physics',
            'participant' => 'Julian Vance',
            'date'        => '2026-05-18',
            'achievement' => '2nd Winner - Silver Medal',
        ];

        return view('hall-of-fame.edit', [
            'title'      => 'Edit Achievement',
            'hallOfFame' => $hallOfFame,
        ]);
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('hall-of-fame.index');
    }

    public function destroy($id)
    {
        return redirect()->route('hall-of-fame.index');
    }
}