<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    public $fillable = [
        'name', 'cate_id', 'price', 'quantity','short_description','description','weight','height','width','length'
    ];

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'cate_id');
    }
}
