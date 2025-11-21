<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    use HasFactory;

    protected $table = 'kategoria';

  
    public $timestamps = false;

    public function etelek()
    {
        return $this->hasMany(Etel::class, 'kategoriaid', 'id');
    }
}
