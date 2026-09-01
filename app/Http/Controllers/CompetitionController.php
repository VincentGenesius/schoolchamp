<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $title = "SchoolChamp - Competitions";
        $competitions = [
            [
                'id' => 1,
                'event' => 'WorldSkills Shanghai 2026',
                'field' => 'IT Software Solutions for Business',
                'participant' => 'Kaelen Voss',
                'advisor' => 'Elena Rostova',
                'date' => '13/05/2026',
                'status' => 'Finished',
            ],
            [
                'id' => 2,
                'event' => 'International Physics Olympiad (IPhO) 2026',
                'field' => 'Theoretical & Experimental Physics',
                'participant' => 'Julian Vance',
                'advisor' => 'Arthur Pendelton',
                'date' => '18/05/2026',
                'status' => 'Finished',
            ],
            [
                'id' => 3,
                'event' => 'Asian Physics Olympiad (APhO) 2026',
                'field' => 'Quantum Mechanics & Optics',
                'participant' => 'Marcus Thorne',
                'advisor' => 'Henrik Lindqvist',
                'date' => '02/06/2026',
                'status' => 'Ongoing',
            ],
            [
                'id' => 4,
                'event' => 'International Mathematical Olympiad (IMO) 2026',
                'field' => 'Combinatorics & Algebra',
                'participant' => 'Alexander Mercer',
                'advisor' => 'Sarah Jenkins',
                'date' => '05/06/2026',
                'status' => 'Upcoming',
            ],
            [
                'id' => 5,
                'event' => 'International Olympiad in Informatics (IOI) 2026',
                'field' => 'Competitive Programming & Algorithms',
                'participant' => 'Jett Sterling',
                'advisor' => 'David Moura',
                'date' => '14/06/2026',
                'status' => 'Upcoming',
            ],
            [
                'id' => 6,
                'event' => 'International Biology Olympiad (IBO) 2026',
                'field' => 'Genetics & Molecular Biology',
                'participant' => 'Sophia Martinez',
                'advisor' => 'Robert Chen',
                'date' => '18/06/2026',
                'status' => 'Upcoming',
            ],
            [
                'id' => 7,
                'event' => 'International Chemistry Olympiad (IChO) 2026',
                'field' => 'Organic & Analytical Chemistry',
                'participant' => 'Elena Rostova',
                'advisor' => 'Lucas Vance',
                'date' => '05/07/2026',
                'status' => 'Upcoming',
            ],
            [
                'id' => 8,
                'event' => 'International Earth Science Olympiad (IESO) 2026',
                'field' => 'Geology & Climate Systems',
                'participant' => 'Oliver Hudson',
                'advisor' => 'Mei Ling',
                'date' => '20/09/2026',
                'status' => 'Upcoming',
            ],
        ];

        return view('competitions.index', [
            'title' => $title,
            'competitions' => $competitions
        ]);
    }
}
