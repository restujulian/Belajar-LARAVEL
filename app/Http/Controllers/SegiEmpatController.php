<?php

namespace App\Http\Controllers;

use App\models\SegiEmpat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\models\Kubus;

class SegiEmpatController extends Controller
{

    /*********************
	//memanggil form input
	*********************/

	public function inputSegiEmpat()
	{
		return View::make('segi-empat.inputSegiEmpat');
	}

	/********
	* membaca hasil input
	* diteruskan menampilkan hasilnya
	*********/

	public function hasil(Request $request)
	{
		$SegiEmpat = new SegiEmpat;
		//aturan validasi
		$rules=[
			'panjang'=>'required|numeric',
			'lebar'=>'required|numeric'];

		$validator = Validator::make(Input::all(), $rules);
		//cek validasi
		if ($validator->fails())
		{
			//jika salah kembalikan ke form untuk diperbaiki
			return View::make('segi-empat.inputSegiEmpat',
			compact('SegiEmpat'))->withErrors($validator);
		}else{
			//lanjukan ke menampilkan hasil/
			$SegiEmpat->panjang=Input::get('panjang');
			$SegiEmpat->lebar = Input::get('lebar'); 
			return View::make('segi-empat.hasil',compact('SegiEmpat'));
		}
	}

	/*********************
	//memanggil form input kubus
	*********************/

	public function inputKubus()
	{
		return View::make('segi-empat.inputKubus');
	}

	/********
	* membaca hasil input kubus
	* diteruskan menampilkan hasilnya
	*********/

	public function hasilKubus(Request $request)
	{
		$kubus = new Kubus;
		//aturan validasi
		$rules=[
			'panjang'=>'required|numeric',
			'lebar'=>'required|numeric',
			'tebal'=>'required|numeric' ];

		$validator = Validator::make(Input::all(), $rules);

		//cek validasi
		if ($validator->fails())
		{
			//jika salah kembalikan ke form untuk diperbaiki
			return View::make('segi-empat.inputKubus',
			compact('kubus'))->withErrors($validator);
		}else{
			//lanjukan ke menampilkan hasil/
			$kubus->panjang=Input::get('panjang');
			$kubus->lebar = Input::get('lebar');
			$kubus->tebal = Input::get('tebal');

			return View::make('segi-empat.hasilKubus',compact('kubus'));
		}
	}
}
