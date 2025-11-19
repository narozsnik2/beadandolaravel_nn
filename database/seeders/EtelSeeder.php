<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = database_path('seeders/txt/etel.txt');
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $index => $line) {
            if ($index === 0) continue; 

            [$nev, $id, $kategoriaid, $felirDatum, $elsoDatum] = explode(';', $line);

$felirDatum = $felirDatum ?: null;
$elsoDatum = $elsoDatum ?: null;

DB::table('etel')->insert([
    'id' => $id,
    'nev' => $nev,
    'kategoriaid' => $kategoriaid,
    'felirdatum' => $felirDatum,
    'elsodatum' => $elsoDatum,
    'created_at' => now(),
    'updated_at' => now(),
]);
        }
    }
}
