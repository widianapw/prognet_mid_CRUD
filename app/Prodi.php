<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prodi extends Model
{
	use SoftDeletes;
 	protected $table = "tb_prodi";
 	protected $primarykey = "id_prodi";
 	public $timestamps = false;
 	
}
