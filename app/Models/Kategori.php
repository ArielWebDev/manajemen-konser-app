<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = [
        'nama_kategori', 'deskripsi', 'harga'
    ];

    public function kamars()
    {
        return $this->hasMany(Kamar::class, 'kategori_id');
    }
}
