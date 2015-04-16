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
} 