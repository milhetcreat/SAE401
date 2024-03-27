<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'ID_UTILISATEUR', 'id');
    }

    public function animal() {
        return $this->belongsTo(Animal::class, 'ID_ANIMAL', 'ID_ANIMAL');
    }
    protected $table ="FAVORIS";

}
