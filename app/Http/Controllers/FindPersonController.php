<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\View\View;
 
class FindPersonController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index(): View
    {
        // Hasilnya array
        // $users = DB::select('select * from findpersons');

        // Melakukan get
        $users = DB::table('findpersons')->get();

        // Menampilkan data dengan id ke 3
        $userske3 = DB::table('gawais')->find(4);

        $datapluck = DB::table('gawais')->pluck('nama', 'pesan');

        dd($datapluck);
    }

    public function delete(){
        // Menghapus isi table
        DB::delete('delete from findpersons');

        // Menghapus table
        // DB::statement('drop table findpersons');
    }

    // Menampilkan data 100 baris dengan orderby 'id'
    public function chunkdata(){
        DB::table('users')->orderBy('id')->chunk(100, function (Collection $users) {
            foreach ($users as $user) {
                // ...
            }
        });
    }

    // Melakukan join
    public function join(){
        $users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
    }

    public function pesawat(){
        $pesawatdata = DB::table('pesawats')
            ->join('gawais', 'gawais.id', '=', 'pesawats.id')
            ->get();

            // ->inRandomOrder()->first();  inRandomOrder() di gunakan untuk menampilkan data secara acak
    }
}