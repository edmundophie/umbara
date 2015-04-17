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
        $this->pelanggan->setPelanggan($this->dataTiket['id_pelanggan']);

        $this->status = new Status();
        $this->status->setStatus($this->dataTiket['id_status']);

        $this->harga = new Harga();
        $this->harga->setHarga($this->dataTiket['id_harga']);

        $this->cso = new CSO();
        $this->cso->setCSO($this->dataTiket['username_cso']);
    }

    public function getDataTiket(){
        return $this->dataTiket;
    }

    public function getDataPelanggan(){
        return $this->pelanggan;
    }

    public function getDataStatus(){
        return $this->status;
    }

    public function  getDataHarga(){
        return $this->harga;
    }

    public function getDataCSO(){
        return $this->cso;
    }

    public function setCSO($cso){
        $this->dataTiket['username_cso'] = $cso;
    }

    public function setIdPelanggan($id){
        $this->dataTiket['id_pelanggan'] = $id;
    }

    public function setKeberangkatan($jam, $tanggal){
        $this->dataTiket['jam_keberangkatan'] = $jam;
        $this->dataTiket['tanggal_keberangkatan'] = $tanggal;
    }

    public function setTujuan($tujuan){
        $this->dataTiket['tujuan'] = $tujuan;
    }

    public function setJumlah($jumlah){
        $this->dataTiket['jumlah'] = $jumlah;
    }

    public function setIdStatus($id){
        $this->dataTiket['id_status'] = $id;
    }

    public function setIdHarga($id){
        $this->dataTiket['id_harga'] = $id;
    }

    public function setDropPoint($name){
        $this->dataTiket['dropping_point'] = $name;
    }

    public function save(){
        $tiket = new TiketModel();
        $tiket->username_cso = $this->dataTiket['username_cso'];
        $tiket->id_pelanggan = $this->dataTiket['id_pelanggan'];
        $tiket->jam_keberangkatan = $this->dataTiket['jam_keberangkatan'];
        $tiket->tanggal_keberangkatan = $this->dataTiket['tanggal_keberangkatan'];
        $tiket->tujuan = $this->dataTiket['tujuan'];
        $tiket->jumlah = $this->dataTiket['jumlah'];
        $tiket->id_status = $this->dataTiket['id_status'];
        $tiket->id_harga = $this->dataTiket['id_harga'];
        $tiket->dropping_point = $this->dataTiket['dropping_point'];
        $tiket->save();
    }


} 