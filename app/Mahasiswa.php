<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
	use SoftDeletes;
    protected $table = "tb_mahasiswa";
    protected $primarykey = "id_mahasiswa";
    public $timestamps = false;

}
