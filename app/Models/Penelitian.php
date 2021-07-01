<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_penelitian';

    protected $fillable = ['judul_penelitian', 'nama_penelitian', 'tanggal_penelitian', 'status_penelitian', 'penjelasan_penelitian', 'foto_penelitian'];
}
