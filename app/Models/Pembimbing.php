<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pembimbing';

    protected $fillable = ['nip_pembimbing', 'nama_pembimbing', 'ket_pembimbing', 'foto_pembimbing'];
}
