<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSizeRequest extends Model
{
    use HasFactory;

    //Relation
    public function size(){
        return $this->belongsTo(Size::class);
    }
}
