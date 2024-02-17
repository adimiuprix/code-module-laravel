<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function edit($id){
        $gawai = Gawai::findOrFail($id);      

        $data = [
            'id' => $gawai->id,
            'nama' => $gawai->nama,
            'pesan' => $gawai->pesan,
            'angka' => $gawai->angka
        ];

        return view('gawai.ubah', $data);
    }

    // Cara #1 menggunakan Facades
    // Kalo Facades memerlukan izin menggunakan fillable
    public function update(Request $request, $id){
        DB::table('gawais')
        ->where('id', $id)
        ->update([
            'nama' => $request->input('nama'),
            'pesan' => $request->input('pesan'),
            'angka' => $request->input('angka'),
        ]);
        
        return redirect()->route('gawai.index')->with('success', 'Data berhasil diubah!');
    }

    //Cara #2 menggunakan Eloquent
    // public function update(Request $request, $id){
    //     Temukan datanya menggunakan Eloquent dan ID (sesuaikan berdasarkan kriteria validasi)
    //     $gawai = Gawai::findOrFail($id);

    //     Validasi masukan (sesuaikan aturan validasi sesuai kebutuhan)
    //     $validasi = $request->validate([
    //         'nama' => 'required|string|max:255',
    //         'pesan' => 'required|string',
    //         'angka' => 'required|numeric',
    //     ]);

    //     Perbarui data menggunakan objek $gawai (lebih disukai daripada nilai hardcoding)
    //     $gawai->update($validasi);
    //     return redirect()->route('gawai.index')->with('success', 'Data berhasil diubah!');
    // }

    public function  destroy($id) {
        // Temukan data berdasarkan ID
        $data = Gawai::findOrFail($id);

        // Hapus data
        $data->delete();

        // Berikan pesan konfirmasi
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }
}