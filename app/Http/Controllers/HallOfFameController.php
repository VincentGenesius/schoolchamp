<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HallOfFameController extends Controller
{
    public function index()
    {
        $HallOfFameList = [
            [
                'id'          => 1,
                'event'       => 'WorldSkills Shanghai 2026',
                'field'       => 'IT Software Solutions for Business',
                'winner'      => 'Kaelen Voss',
                'date'        => '13/05/2026',
                'achievement' => '1st Winner - Gold Medal',
                'advisor'     => 'Zavier Ricks',
            ],
            [
                'id'          => 2,
                'event'       => 'International Physics Olympiad (IPhO) 2026',
                'field'       => 'Theoretical & Experimental Physics',
                'winner'      => 'Julian Vance',
                'date'        => '18/05/2026',
                'achievement' => '2nd Winner - Silver Medal',
                'advisor'     => 'Zavier Ricks',
            ],
        ];

        return view('hall-of-fame.index', [
            'title'           => 'Hall of Fame',
            'HallOfFameList' => $HallOfFameList,
        ]);
    }

    public function create()
    {
        return view('hall-of-fame.create', [
            'title' => 'Add New Hall of Fame',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi dan simpan data (nanti dihubungkan ke Database/Model)
        return redirect()->route('hall-of-fame.index');
    }

    public function edit($id = null)
    {
        // Dummy data untuk dikirim ke view edit
        $HallOfFame = [
            'id'          => $id ?? 1,
            'event'       => 'International Physics Olympiad (IPhO) 2026',
            'field'       => 'Theoretical & Experimental Physics',
            'winner'      => 'Julian Vance',
            'date'        => '2026-05-18',
            'achievement' => '2nd Winner - Silver Medal',
            'advisor'     => 'Zavier Ricks',
        ];

        return view('hall-of-fame.edit', [
            'title'      => 'Edit Hall of Fame',
            'HallOfFame' => $HallOfFame,
        ]);
    }

    public function update(Request $request, $id)
    {
        // Logika update data
        return redirect()->route('hall-of-fame.index');
    }

    public function destroy($id)
    {
        // Logika hapus data
        return redirect()->route('hall-of-fame.index');
    }
}