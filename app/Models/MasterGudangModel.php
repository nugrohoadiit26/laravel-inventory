<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterGudangModel extends Model
{
    use HasFactory;
    protected $table = 'master_gudang';
    public $timestamps = false;
    protected $guarded = ['id'];
}
