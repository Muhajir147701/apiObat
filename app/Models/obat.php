<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class obat extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table= 'obat';
    protected $fillable =[
        'obat_name',
        'obat_picture',
        'harga',
        'deskripsi'
        
    ];

    protected $hidden = [];
}





