<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    public function user() {
        return $this->belongsTo(User::class, 'ID_UTILISATEUR', 'id');
    }

    public function animal() {
        return $this->belongsTo(Message::class, 'ID_ANIMAL', 'ID_ANIMAL');
    }

    public function destinataire() {
        return $this->belongsTo(User::class, 'ID_DESTINATAIRE', 'id');
    }

    protected $table ="MESSAGES";
    protected $primaryKey = 'ID_MESSAGE';

    protected $fillable = ['ID_UTILISATEUR', 'ID_MESSAGE', 'CONTENU', 'DATE'];
    public $timestamps = false;
    
    use HasFactory;
}
