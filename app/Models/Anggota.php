<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_anggota';

    protected $fillable = ['nim_anggota', 'nama_anggota', 'ket_anggota', 'foto_anggota'];

    
}
