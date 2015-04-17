<?php namespace App\Http\Controllers;

use App\Pelanggan;
use App\PelangganModel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PagesController extends Controller {
	public function index() {
		return view('pages.index');
	}

    public function login() {
		return view('pages.login');
	}

	public function customer() {
		return view('pages.customer');
	}

	public function transaksi() {
		return view('pages.transaksi');
	}

	public function laporan() {
		return view('pages.laporan');
	}

	public function pengeluaran() {
		return view('pages.pengeluaran');
	}

	public function pengaturan() {
		return view('pages.pengaturan');
	}

    public function search(Request $request){
        $telepon = $request->get('telepon');
        $pelanggan = PelangganModel::where('telepon', $telepon)->first();

        if($pelanggan != null){
            $customer = new Pelanggan();
            $customer->setPelanggan($pelanggan['id']);
            $id = $customer->getDataPelanggan()['id'];
            $nama = $customer->getDataPelanggan()['nama'];
            $alamat = $customer->getDataPelanggan()['alamat'];
            $telepon = $customer->getDataPelanggan()['telepon'];

            return Redirect::to('/customer')->with(array('id' => $id, 'nama' => $nama, 'alamat' => $alamat, 'telepon' => $telepon));
        }else{
            $id = -1;
            $nama = 'Data tidak ditemukan';
            $alamat = 'Data tidak ditemukan';
            $telepon = 'Data tidak ditemukan';

            return Redirect::to('/customer')->with(array('id' => $id, 'nama' => $nama, 'alamat' => $alamat, 'telepon' => $telepon));
        }
    }

    public function update(Request $request){
        $id = $request->get('id');
        $nama = $request->get('nama');
        $alamat = $request->get('alamat');
        $telepon = $request->get('telepon');

        if($id != -1){
            Pelanggan::update($id, $nama, $telepon, $alamat);
        }

        return redirect('customer');
    }
}