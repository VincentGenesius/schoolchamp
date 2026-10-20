<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $title = "SchoolChamp - Competitions";
        $competitions = Competition::all();

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

    public function store()
    {
        
    }

    public function edit($id)
    {
        $title = 'SchoolChamp - Edit Competition';

        return view('competitions.edit', [
            'title' => $title
        ]);
    }

    function show($id)
    {
        $title = 'SchoolChamp - Detail Competition';

        return view('competitions.show', [
            'title' => $title
        ]);
    }
}
