<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceActivite extends Model
{
    use HasFactory;
    public function Equipement()
    {
        return $this->belongsTo(Equipement::class);
    }
    public function Activite()
    {
        return $this->belongsTo(Activite::class);
    }
}
