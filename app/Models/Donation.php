<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'donor_id',
        'doctor',
        'ta',
        'pouls',
        'points',
        'vol_pre',
        'bags',
        'date_donation',
        'reaction',
    ];

    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
}
