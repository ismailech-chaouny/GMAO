<?php

namespace App\Models;

use App\Models\Specialite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technicien extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'specialite_id'

    ];
    public function specialite()
    {
        return $this->belongsTo(Specialite::class,'specialite_id','id');
    }
}
