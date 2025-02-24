<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_produk';

    protected $table = 'produk';

    protected $guarded = ['id_produk'];
    protected $fillable = [
        'name',
        'category',
        'image',
        'stock',
        'price',
        'description'
    ];
}
