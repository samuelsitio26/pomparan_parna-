<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'year',
        'location',
        'event_date',
        'photo_count',
        'thumbnail',
    ];

    protected $casts = [
        'event_date' => 'date',
    ];
}
