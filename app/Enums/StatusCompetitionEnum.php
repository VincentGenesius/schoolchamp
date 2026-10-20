<?php

namespace App\Enums;

enum StatusCompetitionEnum: string
{
    case UPCOMING = "UPCOMING";
    case ONGOING = "ONGOING";
    case FINISHED = "FINISHED";


    public function label(): string
    {
        return match($this) {
            self::UPCOMING => "Upcoming",
            self::ONGOING => "Ongoing",
            self::FINISHED => "Finished",
        };
    }

}
