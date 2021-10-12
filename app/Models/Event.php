<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'category_id',
        'title',
        'start_date',
        'end_date',
        'description',
        'location'
    ];

    protected $casts = [
        'start_date' => 'datetime:Y-m-d H:i',
        'end_date' => 'datetime:Y-m-d H:i'
    ];
}
