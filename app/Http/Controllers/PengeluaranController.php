<?php
/**
 * Created by PhpStorm.
 * User: Sakurai
 * Date: 4/16/2015
 * Time: 9:10 PM
 */

namespace App\Http\Controllers;

use App\Pengeluaran;
use App\PengeluaranModel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TiketController extends Controller {

    public function insert(Request $request){
        //session stub
        Session::put('username', 'cho');
        $username = Session::get('username');

        $jumlah = $request->get('jumlah');
        $rincian = $request->get('rincian');
        $teleponPelanggan = $request->get('telepon');
        

        $Pengeluaran = new Pengeluaran();
        $Pengeluaran->setCSO($username);
        $Pengeluaran->setJumlah($jumlah);
        $Pengeluaran->setIsi($rincian);
        $Pengeluaran->save();

        return redirect('transaksi');
    }
}
?>