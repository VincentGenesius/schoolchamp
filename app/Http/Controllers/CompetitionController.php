<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $title = "SchoolChamp - Competitions";

        return view('competitions.index', [
            'title' => $title
        ]);
    }
}
