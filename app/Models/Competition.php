<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[Table('competitions')]
#[Fillable('event', 'field', 'participant', 'advisor', 'date', 'status', 'location', 'achievement', 'image')]
class Competition extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::deleting(function ($competition) {
            if ($competition->image && Storage::disk('public')->exists($competition->image)) {
                Storage::disk('public')->delete($competition->image);
            }
        });
    }
}
