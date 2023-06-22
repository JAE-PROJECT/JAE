<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorieactu extends Model
{
    use HasFactory;
    public function actualites()
    {
        return $this->belongsTo(Element::class, 'categorie_id');
    }
}
