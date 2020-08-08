<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaans extends Model
{
    protected $fillable = ['judul','isi', 'tanggal_dibuat', 'tanggal_diperbarui']; 
    protected $table = 'pertanyaan';
}
