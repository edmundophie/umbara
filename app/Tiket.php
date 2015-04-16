<?php

namespace App;


class Tiket {
    private $dataTiket;
    private $pelanggan;
    private $status;
    private $harga;
    private $cso;

    public function __construct(){

    }

    public function setTiket($idTiket){
        $this->dataTiket = TiketModel::where('id', $idTiket)->first();

        $this->pelanggan = new Pelanggan();
        $this->pelanggan->setPelanggan($this->pelanggan['id_pelanggan']);

        $this->status = new Status();
        $this->status->setStatus($this->pelanggan['id_status']);

        $this->harga = new Harga();
        $this->harga->setHarga($this->pelanggan['id_harga']);

        $this->cso = new CSO();
        $this->cso->setCSO($this->pelanggan['username_cso']);
    }


} 