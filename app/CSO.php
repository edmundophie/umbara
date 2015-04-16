<?php

namespace App;

class CSO {
    private $dataCSO;

    public function __construct(){

    }

    public function setCSO($usernameCSO){
        $this->dataCSO = CSOModel::where('username', $usernameCSO)->first();
    }

    public function getDataCSO(){
        return $this->dataCSO;
    }
} 