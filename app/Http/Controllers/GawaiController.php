<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gawai;

class GawaiController extends Controller
{
    public function index(){
        $gawais = Gawai::get();
        $data = ['gawaises' => $gawais];

        return view('gawai.index', $data);
    }

    public function add(){
        return view('gawai.tambah');
    }
    
    public function store(Request $request){
        //  Melakukan validasi dari form
        $request->validate([
            'nama' => 'required|string',
            'pesan' => 'nullable|string',
            'angka' => 'nullable|integer',
        ]);
        
        $gawai = new Gawai();   // Inisiasi Class Model

        //  $gawai->kolomdatabase = $request->name (name dari form)
        $gawai->nama = $request->nama;
        $gawai->pesan = $request->pesan;
        $gawai->angka = $request->angka;
        $gawai->save();
        
        // Redirect dengan pesan sukses atau sejenisnya
        return redirect()->route('gawai.tambah')->with('success', 'Data berhasil disimpan');
    }

    // Method match yang terdiri get & post dalam satu method
    public function handle(Request $request)
    {
        //  Tangani jika melakukan POST
        if ($request->isMethod('post')) {
            $request->validate([
                'nama' => 'required|string',
                'pesan' => 'nullable|string',
                'angka' => 'nullable|integer',
            ]);
            
            // Simpan data ke database menggunakan model Eloquent
            $gawai = new Gawai();
            $gawai->nama = $request->nama;
            $gawai->pesan = $request->pesan;
            $gawai->angka = $request->angka;
            $gawai->save();
            
            // Redirect dengan pesan sukses atau sejenisnya
            return redirect()->route('gawai.handle')->with('success', 'Data berhasil disimpan');
        } elseif ($request->isMethod('get')) {
            // Jika permintaan adalah GET, tampilkan halaman tambah
            return view('gawai.handle');
        } else {
            // Jika metode permintaan tidak didukung, tanggapi di sini
            abort(405, 'Metode tidak diizinkan');
        }
    }
}