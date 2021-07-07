<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublikasiPenelitian extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_publikasi_penelitians';

    protected $fillable = ['id_penelitian', 'tempat_publikasi_penelitians', 'ket_publikasi_penelitians', 'tanggal_publikasi_penelitians', 'foto_publikasi_penelitians'];
}
