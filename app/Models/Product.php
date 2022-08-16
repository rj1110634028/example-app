<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $dateFormat = 'U';
    
    protected $fillable = ['name','address','description'];

    public function store()
    {
        return $this->belongsTo(Store::class, 'storeId', 'id');
    }
}
