<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praktikum extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_praktikums';

    protected $fillable = ['hari_praktikums', 'waktumulai_praktikums', 'waktuselesai_praktikums', 'matakuliah_praktikums', 'kelas_praktikums', 'dosen_praktikums'];
}
