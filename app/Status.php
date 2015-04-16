<?php

namespace App;

class Status {
    private $dataStatus;

    public function __construct(){

    }

    public function setStatus($idStatus){
        $this->dataStatus = StatusModel::where('id', $idStatus);
    }

    public function getDataStatus(){
        return $this->dataStatus;
    }
} 