<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $title = "SchoolChamp - Schedule";
        $schedules = [
            [
                'id' => 1,
                'event' => 'Asian Physics Olympiad (APhO) 2026',
                'date' => '02/06/2026',
                'location' => 'City Aquatic Center',
                'status' => 'Ongoing',
                'student_count' => 1,
            ],
            [
                'id' => 2,
                'event' => 'International Mathematics Olympiad (IMO) 2026',
                'date' => '05/06/2026',
                'location' => 'City Aquatic Center',
                'status' => 'Upcoming',
                'student_count' => 1,
            ],
            [
                'id' => 3,
                'event' => 'International Olympiad in Informatics (IOI) 2026',
                'date' => '14/06/2026',
                'location' => 'City Aquatic Center',
                'status' => 'Upcoming',
                'student_count' => 1,
            ],
            [
                'id' => 4,
                'event' => 'International Biology Olympiad (IBO) 2026',
                'date' => '18/06/2026',
                'location' => 'City Aquatic Center',
                'status' => 'Upcoming',
                'student_count' => 1,
            ],
            [
                'id' => 5,
                'event' => 'International Chemistry Olympiad (IChO) 2026',
                'date' => '05/07/2026',
                'location' => 'City Aquatic Center',
                'status' => 'Upcoming',
                'student_count' => 1,
            ],
            [
                'id' => 6,
                'event' => 'International Earth Science Olympiad (IESO) 2026',
                'date' => '20/09/2026',
                'location' => 'City Aquatic Center',
                'status' => 'Upcoming',
                'student_count' => 1,
            ],
        ];

        return view('schedules.index', [
            'title' => $title,
            'schedules' => $schedules
        ]);
    }
}
