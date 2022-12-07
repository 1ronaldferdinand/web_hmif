<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavbarListModel extends Model
{
    protected $table = 'list_navbar';
    protected $primaryKey = 'navbar_id';
    public $timestamps = false;
    protected $fillable = [
        'navbar_name',
        'navbar_route',
        'navbar_status',
    ];
}
