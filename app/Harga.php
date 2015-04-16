<?php

namespace App;

class Harga {
    private $dataHarga;

    public function __construct(){

    }

    public function setHarga($idHarga){
        $this->dataHarga = HargaModel::where('id', $idHarga);
    }

    public function getDataharga(){
        return $this->dataHarga;
    }
} 