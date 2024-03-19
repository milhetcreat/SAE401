<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function animaux() {
        return $this->hasMany(Animal::class);
    }
       
    protected $table ="TYPE";
    protected $primaryKey = 'ID_TYPE';
}
