<?php

namespace Database\Seeders;

use App\Models\Marga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $margas = [
            // KETURUNAN SIMBOLON TUA
            ['name' => 'Simbolon', 'branch_group' => 'Simbolon Tua', 'desc' => 'Keturunan Simbolon Tua, marga tertua dari cabang Simbolon.'],
            ['name' => 'Sirait', 'branch_group' => 'Simbolon Tua', 'desc' => 'Marga keturunan Raja Simbolon Tua dari wilayah Samosir.'],
            ['name' => 'Nadeak', 'branch_group' => 'Simbolon Tua', 'desc' => 'Marga keturunan Raja Simbolon Tua dari pesisir danau Toba.'],
            ['name' => 'Sitanggang', 'branch_group' => 'Simbolon Tua', 'desc' => 'Keturunan Raja Sitanggang, bagian dari Pomparan Raja Nai Ambaton.'],

            // KETURUNAN TAMBA TUA
            ['name' => 'Tamba', 'branch_group' => 'Tamba Tua', 'desc' => 'Marga asal dari Tamba Tua di Tamba, Samosir.'],
            ['name' => 'Siallagan', 'branch_group' => 'Tamba Tua', 'desc' => 'Marga keturunan Tamba Tua dari wilayah Ambarita Samosir.'],
            ['name' => 'Turnip', 'branch_group' => 'Tamba Tua', 'desc' => 'Marga keturunan Tamba Tua dari wilayah Simanindo Samosir.'],
            ['name' => 'Sidebang', 'branch_group' => 'Tamba Tua', 'desc' => 'Marga keturunan Tamba Tua di daerah Karo & Dairi.'],
            ['name' => 'Napitu', 'branch_group' => 'Tamba Tua', 'desc' => 'Keturunan Tamba Tua yang bermukim di pesisir Samosir.'],
            ['name' => 'Rumahorbo', 'branch_group' => 'Tamba Tua', 'desc' => 'Keturunan Tamba Tua di wilayah hulu Samosir.'],

            // KETURUNAN SARAGI TUA
            ['name' => 'Saragih', 'branch_group' => 'Saragi Tua', 'desc' => 'Marga utama keturunan Saragi Tua di wilayah Simalungun.'],
            ['name' => 'Dasuha', 'branch_group' => 'Saragi Tua', 'desc' => 'Sub-marga Saragih dari Simalungun.'],
            ['name' => 'Garingging', 'branch_group' => 'Saragi Tua', 'desc' => 'Keturunan Saragih di wilayah pegunungan Simalungun.'],
            ['name' => 'Sumbayak', 'branch_group' => 'Saragi Tua', 'desc' => 'Keturunan Saragih dari rumpun Parna Simalungun.'],

            // KETURUNAN MUNTHE TUA & SAMOSIR
            ['name' => 'Munthe', 'branch_group' => 'Munthe Tua', 'desc' => 'Marga keturunan Munthe Tua yang tersebar di Toba, Karo, dan Dairi.'],
            ['name' => 'Dalimunthe', 'branch_group' => 'Munthe Tua', 'desc' => 'Marga keturunan Munthe Tua di wilayah Angkola dan Mandailing.'],
            ['name' => 'Ginting', 'branch_group' => 'Munthe Tua', 'desc' => 'Marga Karo rumpun Munthe Tua (Ginting Munthe).'],
            ['name' => 'Manik', 'branch_group' => 'Munthe Tua', 'desc' => 'Marga Dairi / Pakpak keturunan Munthe Tua.'],
            ['name' => 'Sitio', 'branch_group' => 'Munthe Tua', 'desc' => 'Keturunan Raja Nai Ambaton rumpun Samosir Sitio.'],
            ['name' => 'Simarmata', 'branch_group' => 'Munthe Tua', 'desc' => 'Keturunan Samosir Raja di wilayah Simarmata.'],
            ['name' => 'Saing', 'branch_group' => 'Munthe Tua', 'desc' => 'Marga keturunan Samosir dari rumpun Parna.'],
            ['name' => 'Sinurat', 'branch_group' => 'Munthe Tua', 'desc' => 'Marga Parna keturunan Raja Nai Ambaton.'],
            ['name' => 'Sipayung', 'branch_group' => 'Munthe Tua', 'desc' => 'Keturunan Parna di wilayah Simalungun & Karo.'],

            // SAMOSIR RUMPUN PARNA
            ['name' => 'Siadari', 'branch_group' => 'Samosir Tua', 'desc' => 'Keturunan Samosir Raja di pulau Samosir.'],
            ['name' => 'Sidabutar', 'branch_group' => 'Samosir Tua', 'desc' => 'Keturunan Samosir Raja dari Tomok Samosir.'],
            ['name' => 'Sijabat', 'branch_group' => 'Samosir Tua', 'desc' => 'Keturunan Samosir Raja dari Samosir.'],
            ['name' => 'Pintubatu', 'branch_group' => 'Samosir Tua', 'desc' => 'Marga keturunan Raja Nai Ambaton.'],
            ['name' => 'Tendon', 'branch_group' => 'Munthe Tua', 'desc' => 'Sub-marga Parna di Karo & Dairi.'],
            ['name' => 'Tindang', 'branch_group' => 'Munthe Tua', 'desc' => 'Marga Parna rumpun Dairi/Pakpak.'],
        ];

        foreach ($margas as $index => $marga) {
            Marga::updateOrCreate(
                ['slug' => Str::slug($marga['name'])],
                [
                    'name' => $marga['name'],
                    'branch_group' => $marga['branch_group'],
                    'description' => $marga['desc'],
                    'origin_region' => 'Samosir & Simalungun',
                    'order_number' => $index + 1,
                ]
            );
        }
    }
}
