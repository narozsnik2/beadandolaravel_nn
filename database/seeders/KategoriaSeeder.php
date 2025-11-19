<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = database_path('seeders/txt/kategoria.txt');
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $index => $line) {
            if ($index === 0) continue; // kihagyjuk a fejlécet

            [$id, $nev] = explode(';', $line);

            DB::table('kategoria')->insert([
                'id' => $id,
                'nev' => $nev,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
