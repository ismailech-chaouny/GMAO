<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $fillable = [
        'raison_social',
        'adresse',
        'telephone',
        'responsable'
    ];
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
