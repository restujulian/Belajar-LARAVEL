<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelPropinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('propinsi')->insert([
			['propinsi'=>'D.I. Yogyakarta'],
			['propinsi'=>'Jawa Tengah'],
			['propinsi'=>'Jawa Timur']]);
    }
}
