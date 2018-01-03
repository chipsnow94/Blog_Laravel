<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function Is_Completed()
    {
        return static::where('Completed', '=', 1)->get();
    }
    public static function scopeincomplete($query)
    {
        return $query->where('Completed', '=', 0);
    }
}
