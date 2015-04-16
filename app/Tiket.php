<?php

namespace App;


class Tiket {
    private $dataTiket;
    private $pelanggan;

    public function __construct(){

    }

    public function setTiket($idTiket){
        $this->dataTiket = TiketModel::where('id', $idTiket)->first();

        $this->pelanggan = new Pelanggan();
        $this->pelanggan->setPelanggan($this->pelanggan['id_pelanggan']);
    }
} 