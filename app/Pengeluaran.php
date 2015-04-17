<?php

namespace App;


class Pengeluaran {
    private $dataPengeluaran;

    public function __construct(){

    }

    public function setPelanggan($idPengeluaran){
        $this->dataPengeluaran = PengeluaranModel::where('id', $idPengeluaran)->first();
    }

    public function getDataPengeluaran(){
        return $this->dataPengeluaran;
    }

    public function setCSO($cso){
        $this->dataPengeluaran['username_cso'] = $cso;
    }

    public function setJumlah($jumlah){
        $this->dataPengeluaran['jumlah'] = $jumlah;
    }

    public function setIsi($deskripsi){
        $this->dataPengeluaran['deskripsi'] = $deskripsi;
    }

    public function save(){
        $pengeluaran = new PengeluaranModel();
        $pengeluaran->username_cso = $this->dataPelanggan['username_cso'];
        $pengeluaran->jumlah = $this->dataPelanggan['jumlah'];
        $pengeluaran->deskripsi = $this->dataPelanggan['deskripsi'];
        $pengeluaran->save();
    }
} 