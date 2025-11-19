<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hozzavalo extends Model
{
    use HasFactory;

    protected $table = 'hozzavalo';

    public function etelek()
    {
        return $this->belongsToMany(Etel::class, 'hasznalt', 'hozzavaloid', 'etelid')
                    ->withPivot('mennyiseg', 'egyseg');
    }
}