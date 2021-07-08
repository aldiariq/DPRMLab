<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublikasiPenelitian extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_publikasi_penelitian';

    protected $fillable = ['id_penelitian', 'tempat_publikasi_penelitian', 'ket_publikasi_penelitian', 'tanggal_publikasi_penelitian', 'foto_publikasi_penelitian'];
}
