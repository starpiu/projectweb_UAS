<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $fillable = ['id_yayasan', 'nama', 'kamar', 'sekolah'];
    protected $table = 'santri';
    //public $timestamps = false;
}
