<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoDokumentasiPenelitian extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_demo_dokumentasi_penelitian';

    protected $fillable = ['id_penelitian', 'ket_demo_dokumentasi_penelitian', 'linkvideo_demo_dokumentasi_penelitian'];
}
