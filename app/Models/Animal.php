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
}
