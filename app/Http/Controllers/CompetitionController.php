<?php

namespace App\Http\Controllers;

use App\Http\Requests\Competition\StoreRequest;
use App\Http\Requests\Competition\UpdateRequest;
use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompetitionController extends Controller
{
    public function index()
    {
        $title = "SchoolChamp - Competitions";
        $competitions = Competition::latest()->paginate(5);

        return view('competitions.index', [
            'title' => $title,
            'competitions' => $competitions
        ]);
    }

    public function create()
    {
        $title = 'SchoolChamp - Add Competition';

        return view('competitions.create', [
            'title' => $title
        ]);
    }

    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('competitions', 'public');
        }

        Competition::create($validatedData);

        return redirect()->route('competitions.index');
    }

    function show(Competition $competition)
    {
        $title = 'SchoolChamp - Detail Competition';

        return view('competitions.show', [
            'title' => $title,
            'competition' => $competition
        ]);
    }

    public function edit(Competition $competition)
    {
        $title = 'SchoolChamp - Edit Competition';

        return view('competitions.edit', [
            'title' => $title,
            'competition' => $competition
        ]);
    }

    public function update(Competition $competition, UpdateRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada di storage
            if ($competition->image && Storage::disk('public')->exists($competition->image)) {
                Storage::disk('public')->delete($competition->image);
            }

            $validatedData['image'] = $request->file('image')->store('competitions', 'public');
        } else {
            // Jika tidak ada upload gambar baru, abaikan/hapus key image dari array 
            // agar gambar lama di database tidak tertimpa jadi null/kosong
            unset($validatedData['image']);
        }

        $competition->update($validatedData);

        return redirect()->route('competitions.index');
    }

    public function destroy(Competition $competition)
    {
        $competition->delete();

        return redirect()->route('competitions.index');
    }
}
