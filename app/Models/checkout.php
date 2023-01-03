<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    use HasFactory;
    protected $table = "checkout";
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'nama', 'alamat', 
        'tanggal', 'gambar','paket', 
        'order_notes'
    ];

}
