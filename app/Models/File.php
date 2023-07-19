<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'donor_id',
        'date_premier_don',
        'date_dernier_don',
    ];
}
