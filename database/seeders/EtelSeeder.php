<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = database_path('seeders/txt/etel.txt');
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            [$nev, $kategoriaNev, $felirDatum, $elsoDatum] = explode('|', $line);

            $kategoriaid = DB::table('kategoria')->where('nev', $kategoriaNev)->value('id');

            DB::table('etel')->insert([
                'nev' => $nev,
                'kategoriaid' => $kategoriaid,
                'felirdatum' => $felirDatum ?: null,
                'elsodatum' => $elsoDatum ?: null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
