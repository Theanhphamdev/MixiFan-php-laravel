<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';

    public function products()
    {
        return $this->hasMany(ProductModel::class, 'cate_id');
    }
}
