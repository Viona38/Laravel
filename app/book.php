<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = [
    'judul',
    'penerbit',
    'tahun_terbit',
    'pengarang'
  ];
}
