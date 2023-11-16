<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    protected $fillable = ['id', 'title'];


    public function bbs()
    {
        return $this->hasMany(Bb::class);
    }

    public function latesBb()
    {
        return $this->hasOne(Bb::class)->latestOfMany();
    }

    public function LatestMinPriceonLastMonth()
    {
        return $this->hasOne(Bb::class)->ofMany(
            ['price' => 'MIN', 'created_ad' => 'MAX'],
            function ($query) {
                $query->whereMonth('created_ad', now()->month);
            }
        );
    }

    public function offers()
    {
        return $this->hasManyThrough(Offer::class, Bb::class);
    }

    public function rubrics()
    {
        return $this->hasMany(self::class,'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class,'parent_id');
    }

}
