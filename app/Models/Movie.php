<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function review()
    {
    	return $this->morphMany(Review::class, 'reviewable')->whereNull('parent_id');
    }




}
