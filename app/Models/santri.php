<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class santri extends Model
{
    use HasFactory;
    protected $fillable = ['Id_Yayasan', 'Nama', 'Kamar', 'Sekolah'];
    protected $table = 'santri';
    public $timestamps = false;
}
