<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
