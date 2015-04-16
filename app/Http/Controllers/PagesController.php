<?php namespace App\Http\Controllers;

use App\Http\Requests;

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
}