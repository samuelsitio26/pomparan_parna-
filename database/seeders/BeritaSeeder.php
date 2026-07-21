<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $beritas = [
            [
                'title' => 'Pesta Bona Taon Parsadaan Parna Se-Indonesia Tahun 2026',
                'category' => 'Kegiatan',
                'summary' => 'Pelaksanaan pesta adat Bona Taon Parsadaan Pomparan Ni Raja Nai Ambaton berlangsung meriah dihadiri ribuan keluarga Parna se-Indonesia.',
                'content' => 'Acara Pesta Bona Taon Parna 2026 diselenggarakan dengan penuh rasa persaudaraan dan sukacita. Berbagai perwakilan daerah menghadiri acara budaya ini untuk mempererat tali silaturahmi antar keturunan Raja Nai Ambaton.',
                'location' => 'Jakarta / Samosir',
                'event_date' => '2026-02-15',
                'is_featured' => true,
            ],
            [
                'title' => 'Peresmian Renovasi Rumah Adat Parna di Samosir',
                'category' => 'Adat',
                'summary' => 'Pengurus Parsadaan Parna meresmikan pemugaran dan renovasi situs bersejarah rumah adat Parna di wilayah Samosir.',
                'content' => 'Pemugaran situs bersejarah ini bertujuan menjaga warisan budaya spiritual dan fisik leluhur Parna agar tetap terpelihara dengan anggun bagi generasi mendatang.',
                'location' => 'Samosir, Sumatera Utara',
                'event_date' => '2026-04-10',
                'is_featured' => true,
            ],
            [
                'title' => 'Musyawarah Nasional (Munas) Parsadaan Parna 2026',
                'category' => 'Pengumuman',
                'summary' => 'Pengumuman jadwal pelaksanaan Musyawarah Nasional Pengurus Pusat Parna untuk menetapkan program kerja sosial kebudayaan.',
                'content' => 'Munas Parna 2026 akan membahas penguatan database Tarombo digital, program beasiswa anak-anak Parna, serta pelestarian silsilah adat.',
                'location' => 'Medan, Sumatera Utara',
                'event_date' => '2026-08-20',
                'is_featured' => false,
            ],
            [
                'title' => 'Bantuan Beasiswa Pendidikan Bagi Putra-Putri Parna Berprestasi',
                'category' => 'Berita',
                'summary' => 'Parsadaan Parna menyalurkan bantuan beasiswa pendidikan tahunan untuk mahasiswa dan generasi muda Parna di perguruan tinggi.',
                'content' => 'Program kepedulian sosial Parna kembali membuka pendaftaran beasiswa pendidikan bagi putra-putri Parna yang sedang menempuh studi sarjana.',
                'location' => 'Nasional',
                'event_date' => '2026-06-01',
                'is_featured' => false,
            ],
        ];

        foreach ($beritas as $berita) {
            Berita::updateOrCreate(
                ['slug' => Str::slug($berita['title'])],
                [
                    'title' => $berita['title'],
                    'category' => $berita['category'],
                    'summary' => $berita['summary'],
                    'content' => $berita['content'],
                    'location' => $berita['location'],
                    'event_date' => $berita['event_date'],
                    'is_featured' => $berita['is_featured'],
                ]
            );
        }
    }
}
