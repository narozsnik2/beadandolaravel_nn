<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HasznaltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = database_path('seeders/txt/hasznalt.txt');
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $index => $line) {
            if ($index === 0) continue; // ha van fejléc, egyébként elhagyható

            [$mennyiseg, $egyseg, $etelid, $hozzavaloid] = explode(';', $line);

            DB::table('hasznalt')->insert([
                'mennyiseg' => $mennyiseg ?: null,
                'egyseg' => $egyseg ?: null,
                'etelid' => $etelid,
                'hozzavaloid' => $hozzavaloid,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
