<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fokuspenelitian extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_fokuspenelitians';

    protected $fillable = ['topik_fokuspenelitians'];
}
