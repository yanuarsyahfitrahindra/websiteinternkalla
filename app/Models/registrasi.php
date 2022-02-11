<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_instansi',
        'id_sbu',
        'id_departemen',
        'nama',
        'nohp',
        'jurusan',
        'status',
        'startdate',
        'end_date',
        'durasi',
    ];
}
