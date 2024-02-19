<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    // memberitau nama tablenya
    protected $table = 'flights';

    // memberitau foreignkey nya
    protected $primaryKey = 'id';

    // mengatur increment true atau false
    public $incrementing = true;

    // ini akan membuat timestamp di perbarui
    public $timestamps = true;  // default 'true' kalo tidak di tulis

    // Secara default, instance model yang baru dibuat tidak akan berisi nilai atribut apa pun.
    // Jika menentukan nilai default untuk beberapa atribut model, kita menentukan $attributes properti pada model Anda.
    // Nilai atribut yang ditempatkan dalam $attributesarray harus dalam format mentah dan "dapat disimpan" seolah-olah baru saja dibaca dari database.
    // protected $attributes = [
    //     'options' => '[]',
    //     'delayed' => false,
    // ];
    
}
