<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purnama_tilem extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_pt', 'nama', 'jumlah', 'keterangan'
    ];
}
