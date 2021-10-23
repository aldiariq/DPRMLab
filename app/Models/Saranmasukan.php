<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saranmasukan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_saranmasukan';

    protected $fillable = ['isi_saranmasukan', 'tanggal_saranmasukan'];
}
