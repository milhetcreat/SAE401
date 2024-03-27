<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    public function user() {
        return $this->belongsTo(User::class, 'ID_UTILISATEUR', 'id');
    }

    protected $table ="MESSAGES";
    protected $primaryKey = 'ID_MESSAGE';

    protected $fillable = ['ID_UTILISATEUR', 'ID_MESSAGE', 'CONTENU', 'DATE'];
    public $timestamps = false;
    
    use HasFactory;
}
