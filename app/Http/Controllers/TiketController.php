<?php
/**
 * Created by PhpStorm.
 * User: Sakurai
 * Date: 4/16/2015
 * Time: 9:10 PM
 */

namespace App\Http\Controllers;

use App\HargaModel;
use App\Pelanggan;
use App\PelangganModel;
use App\StatusModel;
use App\Tiket;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TiketController extends Controller {

    public function insert(Request $request){
        //session stub
        Session::put('username', 'cho');
        $username = Session::get('username');

        $namaPelanggan = $request->get('nama');
        $alamatPelanggan = $request->get('alamat');
        $teleponPelanggan = $request->get('telepon');
        $jenis = $request->get('jenis');
        $tanggal = $request->get('tanggal_berangkat');
        $jam = $request->get('jam_berangkat').':00:00';
        $jumlah = $request->get('jumlah');
        $dropPoint = $request->get('dropping_point');

        if(PelangganModel::where('telepon', $teleponPelanggan)->first() == null){
            $pelanggan = new Pelanggan();
            $pelanggan->setNama($namaPelanggan);
            $pelanggan->setAlamat($alamatPelanggan);
            $pelanggan->setTelepon($teleponPelanggan);
            $pelanggan->save();
        }

        $idPelanggan = PelangganModel::where('telepon', $teleponPelanggan)->first()['id'];

        $tiket = new Tiket();
        $tiket->setCSO($username);
        $tiket->setIdPelanggan($idPelanggan);
        $tiket->setKeberangkatan($jam, $tanggal);
        $tiket->setTujuan('Cinere');
        $tiket->setJumlah($jumlah);
        $tiket->setIdStatus(StatusModel::where('status', $jenis)->first()['id']);
        $tiket->setDropPoint($dropPoint);
        $tiket->setIdHarga(HargaModel::where('deskripsi', $this->dateChecker($tanggal))->first()['id']);
        $tiket->save();

        return redirect('transaksi');
    }

    public function dateChecker($date){
        $date = new \DateTime($date);
        $day = $date->format("w");

        if($day == 6 || $day == 0){
            return 'weekend';
        }else{
            return 'weekday';
        }
    }

} 