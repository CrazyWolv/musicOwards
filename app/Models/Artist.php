<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ["name", "image", "description", "url_video","album","category_id"];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function votes(){
        return $this->hasMany(Vote::class);
    }
}
