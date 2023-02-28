<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'date',
        'duree',
        'technicien_id',
        'tache_id',
        'etat_id'
    ];
    public function Technicien()
    {
        return $this->belongsTo(Technicien::class,'technicien_id','id');
    }
    public function etat()
    {
        return $this->belongsTo(Etat::class,'etat_id','id');
    }
}
