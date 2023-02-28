<?php

namespace App\Models;

use App\Models\Technicien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialite extends Model
{
    use HasFactory;
    protected $fillable = [
        'Specialite',
    ];
    public function technicien()
    {
        return $this->hasMany(Technicien::class);
    }
}
