<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = 
[
            'company_id',
            'product_name',
            'price',
            'stock',
           'img_path',
           'comment'

];
}
