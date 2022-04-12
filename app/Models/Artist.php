<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function votes(){
        return $this->hasMany(Vote::class);
    }
}
