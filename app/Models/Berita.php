<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = ['kategori_id', 'judul_berita', 'slug', 'excerpt', 'isi_berita', 'foto'];
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
