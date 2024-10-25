<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name']; // Ajoutez d'autres champs si nécessaire

    // Vous pouvez ajouter des relations ici si besoin
    public function tracks()
    {
        return $this->hasMany(Track::class);
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class);
    }
}
