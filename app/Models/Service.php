<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_service',
        'etablissement_id',
    ];
    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class,'etablissement_id','id');
    }
    public function equipements()
    {
        return $this->hasMany(Equipement::class);
    }
}
