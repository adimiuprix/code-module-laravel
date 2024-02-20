<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toko extends Model
{
    use HasFactory;

    public function buku()
    {
        return $this->hasOne(Buku::class);
    }
}
