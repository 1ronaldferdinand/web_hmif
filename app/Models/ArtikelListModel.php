<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtikelListModel extends Model
{
    protected $table = 'list_article';
    protected $primaryKey = 'artikel_id';
    public $timestamps = false;
    protected $fillable = [
        'artikel_judul',
        'artikel_gambar',
        'artikel_konten',
        'artikel_status',
        'artikel_created_at',
    ];
}
