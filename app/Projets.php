<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    public $fillable = ['logo', 'titre', 'solution', 'dure', 'description', 'probleme', 'stade', 'nature', 'site', 'video','equipes', 'categorie'];



    public function user() {
        return $this->belongsTo(User::class);
    }
}
