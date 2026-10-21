<?php

namespace App\Http\Controllers;

use App\Http\Requests\Competition\StoreRequest;
use App\Http\Requests\Competition\UpdateRequest;
use App\Models\Competition;
use Illuminate\Http\Request;

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
        $validatedRequests = $request->validated();

        Competition::create($validatedRequests);

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
        $validatedRequests = $request->validated();

        $competition->update($validatedRequests);

        return redirect()->route('competitions.index');
    }

    public function destroy(Competition $competition)
    {
        $competition->delete();

        return redirect()->route('competitions.index');
    }
}
