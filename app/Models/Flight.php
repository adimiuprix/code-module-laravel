<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    // memberitau nama tablenya
    protected $table = 'my_flights';

    // memberitau foreignkey nya
    protected $primaryKey = 'flight_id';

    // mengatur increment true atau false
    public $incrementing = true;
}
