<?php

namespace App;


class Pelanggan {
    private $dataPelanggan;

    public function __construct(){

    }

    public function setPelanggan($idPelanggan){
        $this->dataPelanggan = PelangganModel::where('id', $idPelanggan)->first();
    }

    public function getDataPelanggan(){
        return $this->dataPelanggan;
    }

    public function setNama($nama){
        $this->dataPelanggan['nama'] = $nama;
    }

    public function setAlamat($alamat){
        $this->dataPelanggan['alamat'] = $alamat;
    }

    public function setTelepon($telepon){
        $this->dataPelanggan['telepon'] = $telepon;
    }

    public function save(){
        $pelanggan = new PelangganModel();
        $pelanggan->nama = $this->dataPelanggan['nama'];
        $pelanggan->alamat = $this->dataPelanggan['alamat'];
        $pelanggan->telepon = $this->dataPelanggan['telepon'];
        $pelanggan->save();
    }
} 