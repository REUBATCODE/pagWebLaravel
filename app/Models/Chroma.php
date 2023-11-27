<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chroma extends Model
{
    use HasFactory;

    public function skin() {
        return $this->belongsTo(Skin::class);
    }
}
