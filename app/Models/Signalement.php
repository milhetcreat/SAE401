<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signalement extends Model
{
    use HasFactory;

    protected $table ="SIGNALEMENT";
    protected $primaryKey = 'ID_SIGNALEMENT';

    protected $fillable = [ 'ID_ANIMAL', 'ID_UTILISATEUR', 'RAISON', 'DATE'];
    public $timestamps = false;

}
