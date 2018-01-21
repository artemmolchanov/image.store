<?php

namespace App;

use Carbon\Carbon;

class Image extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @param $query
     * @param $filters
     */
    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']){
            $query->whereYear('created_at', $year);
        }
    }

    /**
     * @return mixed
     */
    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
                     ->groupBy('year', 'month')
                     ->orderByRaw('min(created_at) desc')
                     ->get()
                     ->toArray();
    }
}