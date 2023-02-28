<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $fillable = [
        'Description',
        'Date',
        'Duree',
        'equipement_id'

    ];
    public function equipement()
    {
        return $this->belongsTo(Equipement::class,'equipement_id','id');
    }
    public function Activites()
    {
        return $this->hasMany(Activite::class);
    }
}
