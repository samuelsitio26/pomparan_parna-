<?php

namespace Database\Seeders;

use App\Models\Tarombo;
use App\Models\Marga;
use Illuminate\Database\Seeder;

class TaromboSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Root Generation 1
        $root = Tarombo::create([
            'name' => 'Raja Nai Ambaton (Tuan Sorba Di Julu)',
            'title_degree' => 'Raja',
            'generation_level' => 1,
            'gender' => 'L',
            'biography' => 'Leluhur Agung dan Pendiri Parsadaan Pomparan Ni Raja Nai Ambaton (PARNA). Menurunkan 4 putra utama.',
        ]);

        // 2. Generation 2 (4 Putra Utama)
        $simbolonTua = Tarombo::create([
            'name' => 'Simbolon Tua',
            'title_degree' => 'Raja',
            'generation_level' => 2,
            'parent_id' => $root->id,
            'gender' => 'L',
            'biography' => 'Putra Pertama Raja Nai Ambaton. Cikal bakal rumpun Marga Simbolon, Sirait, Nadeak, Sitanggang.',
        ]);

        $tambaTua = Tarombo::create([
            'name' => 'Tamba Tua',
            'title_degree' => 'Raja',
            'generation_level' => 2,
            'parent_id' => $root->id,
            'gender' => 'L',
            'biography' => 'Putra Kedua Raja Nai Ambaton. Cikal bakal rumpun Marga Tamba, Turnip, Siallagan, Sidebang, Napitu, Rumahorbo.',
        ]);

        $saragiTua = Tarombo::create([
            'name' => 'Saragi Tua',
            'title_degree' => 'Raja',
            'generation_level' => 2,
            'parent_id' => $root->id,
            'gender' => 'L',
            'biography' => 'Putra Ketiga Raja Nai Ambaton. Cikal bakal rumpun Marga Saragih, Dasuha, Garingging, Sumbayak di Simalungun.',
        ]);

        $muntheTua = Tarombo::create([
            'name' => 'Munthe Tua',
            'title_degree' => 'Raja',
            'generation_level' => 2,
            'parent_id' => $root->id,
            'gender' => 'L',
            'biography' => 'Putra Keempat Raja Nai Ambaton. Cikal bakal rumpun Marga Munthe, Samosir, Sitio, Simarmata, Ginting Munthe.',
        ]);

        // 3. Generation 3 (Keturunan Simbolon Tua)
        $margaSimbolon = Marga::where('name', 'Simbolon')->first();
        Tarombo::create([
            'name' => 'Raja Simbolon',
            'title_degree' => 'Raja',
            'generation_level' => 3,
            'parent_id' => $simbolonTua->id,
            'marga_id' => $margaSimbolon?->id,
            'gender' => 'L',
            'biography' => 'Leluhur Marga Simbolon (Tuan Juara, Alt, Martagal, Surty).',
        ]);

        $margaSitanggang = Marga::where('name', 'Sitanggang')->first();
        Tarombo::create([
            'name' => 'Raja Sitanggang',
            'title_degree' => 'Raja',
            'generation_level' => 3,
            'parent_id' => $simbolonTua->id,
            'marga_id' => $margaSitanggang?->id,
            'gender' => 'L',
            'biography' => 'Leluhur Marga Sitanggang (Bau, Gusar, Lipan, Silo).',
        ]);

        // Keturunan Tamba Tua
        $margaTamba = Marga::where('name', 'Tamba')->first();
        Tarombo::create([
            'name' => 'Raja Tamba',
            'title_degree' => 'Raja',
            'generation_level' => 3,
            'parent_id' => $tambaTua->id,
            'marga_id' => $margaTamba?->id,
            'gender' => 'L',
            'biography' => 'Leluhur Marga Tamba di Samosir.',
        ]);

        $margaTurnip = Marga::where('name', 'Turnip')->first();
        Tarombo::create([
            'name' => 'Raja Turnip',
            'title_degree' => 'Raja',
            'generation_level' => 3,
            'parent_id' => $tambaTua->id,
            'marga_id' => $margaTurnip?->id,
            'gender' => 'L',
            'biography' => 'Leluhur Marga Turnip di Simanindo.',
        ]);

        // Keturunan Saragi Tua
        $margaSaragih = Marga::where('name', 'Saragih')->first();
        Tarombo::create([
            'name' => 'Raja Saragih',
            'title_degree' => 'Raja',
            'generation_level' => 3,
            'parent_id' => $saragiTua->id,
            'marga_id' => $margaSaragih?->id,
            'gender' => 'L',
            'biography' => 'Leluhur Marga Saragih di Simalungun.',
        ]);

        // Keturunan Munthe Tua
        $margaMunthe = Marga::where('name', 'Munthe')->first();
        Tarombo::create([
            'name' => 'Raja Munthe',
            'title_degree' => 'Raja',
            'generation_level' => 3,
            'parent_id' => $muntheTua->id,
            'marga_id' => $margaMunthe?->id,
            'gender' => 'L',
            'biography' => 'Leluhur Marga Munthe.',
        ]);

        $margaSitio = Marga::where('name', 'Sitio')->first();
        Tarombo::create([
            'name' => 'Raja Sitio',
            'title_degree' => 'Raja',
            'generation_level' => 3,
            'parent_id' => $muntheTua->id,
            'marga_id' => $margaSitio?->id,
            'gender' => 'L',
            'biography' => 'Leluhur Marga Sitio keturunan Parna.',
        ]);

        $margaSimarmata = Marga::where('name', 'Simarmata')->first();
        Tarombo::create([
            'name' => 'Raja Simarmata',
            'title_degree' => 'Raja',
            'generation_level' => 3,
            'parent_id' => $muntheTua->id,
            'marga_id' => $margaSimarmata?->id,
            'gender' => 'L',
            'biography' => 'Leluhur Marga Simarmata di Simarmata Samosir.',
        ]);
    }
}
