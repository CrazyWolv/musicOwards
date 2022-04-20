<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * Link Categories Model to Artist Model so it can return them
     * @return Method
     **/
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Link Votes Model to Artist Model so it can return them
     * @return Method
     **/
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
