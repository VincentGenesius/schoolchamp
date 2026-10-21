<?php

namespace App\Http\Controllers;

use App\Enums\StatusCompetitionEnum;
use App\Models\Competition;
use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function index()
    {
        $competitions = Competition::all();

        $recentCompetitions = Competition::latest()->take(3)->get();
        
        $totalFinished = Competition::where('status', StatusCompetitionEnum::FINISHED)->count();
        $totalOngoing = Competition::where('status', StatusCompetitionEnum::ONGOING)->count();
        $totalUpcoming = Competition::where('status', StatusCompetitionEnum::UPCOMING)->count();
        
        $recentAchievements = Competition::whereNotNull('achievement')
            ->where('achievement', '!=', '-')
            ->where('achievement', '!=', '')
            ->latest()
            ->take(3)
            ->get();

        return view('overview.index', [
            'title' => 'Overview',
            'competitions' => $competitions,
            'recentCompetitions' => $recentCompetitions,
            'totalFinished' => $totalFinished,
            'totalOngoing' => $totalOngoing,
            'totalUpcoming' => $totalUpcoming,
            'recentAchievements' => $recentAchievements
        ]);
    }
}
