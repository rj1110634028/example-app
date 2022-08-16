<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','description'];

    public function product()
    {
        return $this->hasMany(Product::class, 'storeId', 'id');
    }
}
