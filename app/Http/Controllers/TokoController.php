<?php

namespace App\Http\Controllers;

use App\Models\Toko;

class TokoController extends Controller
{
    public function show($id)
    {
        $toko = Toko::find($id);

        // Mengambil data buku dari toko
        $buku = $toko->buku;

        return view('toko.show', compact('toko', 'buku'));
    }
}
