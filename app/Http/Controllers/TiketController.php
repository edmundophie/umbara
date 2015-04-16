<?php
/**
 * Created by PhpStorm.
 * User: Sakurai
 * Date: 4/16/2015
 * Time: 9:10 PM
 */

namespace App\Http\Controllers;

use App\Pelanggan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TiketController extends Controller {
    public function insert(Request $request){
        $namaPelanggan = $request->get('nama');
        $alamatPelanggan = $request->get('alamat');
        $teleponPelanggan = $request->get('telepon');

        $pelanggan = new Pelanggan();
        $pelanggan->setNama($namaPelanggan);
        $pelanggan->setAlamat($alamatPelanggan);
        $pelanggan->setTelepon($teleponPelanggan);
        $pelanggan->save();

        return redirect('/');
    }
} 