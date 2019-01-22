<?php

namespace App\models;
use App\models\SegiEmpat;

class Kubus extends SegiEmpat
{
    public $tebal;
	// menghitung volueme/
	public function volume()
	{
		return $this->tebal * $this->luas();
	}
}
