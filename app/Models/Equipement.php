<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'designation',
        'description',
        'categorie_id',
        'service_id',
        'dateDebut',
        'prix',
        'marque',
        'reference',
        'document',
        'pieceRechanger',
    ];
    public function tache()
    {
        return $this->hasMany(Tache::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
