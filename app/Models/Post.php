<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Buat fungsi untuk menyambungkan model Comment
    public function comments(){
        return $this->hasMany(Comment::class);  // Disini gunakan method hasMany dan mengisi parameternya model Comment
    }
}
