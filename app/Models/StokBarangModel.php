<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBarangModel extends Model
{
    protected $table = 'stok_barang';
    public $timestamps = false;
    protected $guarded = ['id'];
}

//filable adalah dari inputan user
//guarded adalah otomatis created
