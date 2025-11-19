<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HozzavaloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = database_path('seeders/txt/hozzavalo.txt');
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $index => $line) {
            if ($index === 0) continue; // fejléc kihagyása

            [$id, $nev] = explode(';', $line);

            DB::table('hozzavalo')->insert([
                'id' => $id,
                'nev' => $nev,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
