<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function getStartDatePartsAttribute()
    {
        $startDate = Carbon::create($this->start_date);
        return [
            'day' => $startDate->format('d'),
            'month' => $startDate->format('M'),
            'hour' => $startDate->format('H:i')
        ];
    }

    public function getEndDatePartsAttribute()
    {
        $endDate = Carbon::create($this->end_date);
        return [
            'day' => $endDate->format('d'),
            'month' => $endDate->format('M'),
            'hour' => $endDate->format('H:i')
        ];
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
