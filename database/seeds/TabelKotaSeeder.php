<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelKotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kota')->insert([
			['id_propinsi'=>1,'nama_kota' =>'Kodya Yogyakarta'],
			['id_propinsi'=>1,'nama_kota' =>'Bantul'],
			['id_propinsi'=>1,'nama_kota' =>'Sleman'],
			['id_propinsi'=>1,'nama_kota' =>'Kulon Progo'],
			['id_propinsi'=>2,'nama_kota' =>'Klaten'],
			['id_propinsi'=>2,'nama_kota' =>'Magelang'],
			['id_propinsi'=>3,'nama_kota' =>'Malang'],
			['id_propinsi'=>3,'nama_kota' =>'Mojokerto']
		]);
    }
}
