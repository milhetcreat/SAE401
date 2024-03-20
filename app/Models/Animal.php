<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function type() {
        return $this->belongsTo(Type::class, 'ID_TYPE', 'id');
    }

    protected $table ="ANIMAL";
    protected $primaryKey = 'ID_ANIMAL';

    protected $fillable = ['ID_UTILISATEUR', 'ID_TYPE', 'PRENOM', 'AGE', 'GENRE', 'TAILLE', 'POIDS', 'PHOTO', 'LOCALISATION', 'RACE', 'SPECIFICITE', 'DESCRIPTION'];
    public $timestamps = false;
}
