<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'telephone',
        'groupage',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'type',
    ];

    public function file()
    {
        return $this->hasOne(File::class);
    }

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
