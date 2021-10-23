<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_beritas';

    protected $fillable = ['judul_beritas', 'tanggal_beritas', 'foto_beritas', 'isi_beritas'];
}
