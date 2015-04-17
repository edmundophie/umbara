<?php

namespace App;

class Status {
    private $dataStatus;


    public function setStatus($idStatus){
        $this->dataStatus = StatusModel::where('id', $idStatus)->first();
    }

    public function getDataStatus(){
        return $this->dataStatus;
    }
} 