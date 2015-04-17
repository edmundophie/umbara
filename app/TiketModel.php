<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\HargaModel;

class TiketModel extends Model{
    protected $table = 'tiket';
    protected $appends = array('color_code', 'harga');
    
    public $timestamps = false;

    public function getColorCodeAttribute() {
    	$status = $this->attributes['status_pembayaran'];
    	if($status=="BOOKED")
    		return "danger";
    	else
    		return "success";
    }

    public function getHargaAttribute() {
        $id_harga = $this->attributes['id_harga'];
        $harga = HargaModel::where('id', $id_harga)->first()['harga'];
        return $this->attributes['jumlah']*$harga;
    }

    public function getTanggalPemesananAttribute() {
        return date('d M Y H:i', strtotime($this->attributes['tanggal_pemesanan']));
    }

    public function getJamKeberangkatanAttribute() {
        return date('H:i', strtotime($this->attributes['jam_keberangkatan']));
    }

    public function getTanggalKeberangkatanAttribute() {
        return date('d M Y', strtotime($this->attributes['tanggal_keberangkatan']));
    }
} 