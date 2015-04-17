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
use App\TiketModel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use DB;

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

    public function searchById(Request $request) {
        $transaksi = TiketModel::where('id', $request->input('id_transaksi'))->first();
        if(count($transaksi)>0) {
            $tiket = new Tiket();
            $tiket->setTiket($transaksi['id']);
            $arr_tiket[0] = $tiket;
        }
        return view('pages.transaksi', compact('arr_tiket'));
    }

    public function searchByDate(Request $request) {
        $tanggal = date('Y-m-d', strtotime($request->input('tanggal')));
        $transaksi = TiketModel::where(DB::raw("DATE_FORMAT(tanggal_pemesanan, '%Y-%m-%d')"), $tanggal)->get();
        
        $i=0;
        $arr_tiket;
        foreach($transaksi as $tiket) {
            $temp = new Tiket();
            $temp->setTiket($tiket['id']);
            $arr_tiket[$i] = $temp;
            ++$i;
        }
        return view('pages.transaksi', compact('arr_tiket'));
    }
} 