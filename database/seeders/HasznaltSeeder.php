<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HasznaltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = database_path('seeders/txt/hasznalt.txt');
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            [$mennyiseg, $egyseg, $etelNev, $hozzavaloNev] = explode('|', $line);

            $etelid = DB::table('etel')->where('nev', $etelNev)->value('id');
            $hozzavaloid = DB::table('hozzavalo')->where('nev', $hozzavaloNev)->value('id');

            DB::table('hasznalt')->insert([
                'mennyiseg' => $mennyiseg,
                'egyseg' => $egyseg,
                'etelid' => $etelid,
                'hozzavaloid' => $hozzavaloid,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
