<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DivisiListModel extends Model
{
    protected $table = 'list_divisi';
    protected $primaryKey = 'divisi_id';
    public $timestamps = false;
    protected $fillable = [
        'divisi_name',
        'divisi_description',
        'divisi_icon',
    ];
}
