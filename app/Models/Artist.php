<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Artist Class
 * @property mixed $name
 * @property mixed $image
 * @property mixed $description
 * @property mixed $category_id
 * @property mixed $url_video
 * @property mixed $album
 */

class Artist extends Model
{
    /**
     * Link Categories Model to Artist Model so it can return them
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Link Votes Model to Artist Model so it can return them
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
