<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Table('competitions')]
#[Fillable('event', 'field', 'participant', 'advisor', 'date', 'status', 'location', 'achievement')]
class Competition extends Model
{
    //
}
