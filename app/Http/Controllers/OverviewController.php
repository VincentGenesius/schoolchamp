<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function index()
    {
        $competitions = Competition::all();

        return view('overview.index', [
            'title' => 'Overview',
            'competitions' => $competitions
        ]);
    }
}
