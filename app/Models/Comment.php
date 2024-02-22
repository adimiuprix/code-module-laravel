<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    // Di bagian ini kita sambungin Model post
    public function post() : BelongsTo
    {
        return $this->belongsTo(Post::class);   // gunakan method belongsTo dengan parameter nya model Post
    }
}
