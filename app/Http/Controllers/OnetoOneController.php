<?php

namespace App\Http\Controllers;
use App\Models\Toko;

class OnetoOneController extends Controller
{
    public function show($id)
    {
        $toko = Toko::find($id);

        // Mengambil data buku dari toko
        $buku = $toko->buku;

        return view('eloquent.toko_buku', compact('toko', 'buku'));
    }
}
