<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_laboratoriums';

    protected $fillable = ['logo_laboratoriums', 'nama_laboratoriums', 'penjelasan_laboratoriums', 'instagram_laboratoriums', 'youtube_laboratoriums', 'github_laboratoriums', 'email_laboratoriums', 'warnatajuk_laboratoriums'];
}
