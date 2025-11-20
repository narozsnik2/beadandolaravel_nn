<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etel extends Model
{
    use HasFactory;

    protected $table = 'etel';

    public function hozzavalok()
    {
        return $this->belongsToMany(Hozzavalo::class, 'hasznalt', 'etelid', 'hozzavaloid')
                    ->withPivot('mennyiseg', 'egyseg');
    }


    public function index()
{
    
    $kategoriaRecept = Kategoria::with(['etelek' => function($query) {
        $query->inRandomOrder()->limit(1);
    }])->get();

    return view('frontend.home', compact('kategoriaRecept'));
}

public function kategoria()
{
    return $this->belongsTo(Kategoria::class, 'kategoriaid', 'id');
}

}