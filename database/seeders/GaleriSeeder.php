<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        $albums = [
            [
                'title' => 'Pesta Pomparan Parna 2024',
                'category' => 'Pesta & Perayaan',
                'year' => 2024,
                'location' => 'Balige, Toba',
                'event_date' => '2024-05-12',
                'photo_count' => 24,
                'thumbnail' => '/images/batak_festival.jpg',
            ],
            [
                'title' => 'Rapat Pengurus Pusat Parna Tahun 2024',
                'category' => 'Rapat & Pertemuan',
                'year' => 2024,
                'location' => 'Medan',
                'event_date' => '2024-04-28',
                'photo_count' => 18,
                'thumbnail' => '/images/hero_toba.png',
            ],
            [
                'title' => 'Pelantikan Pengurus Wilayah Parna Sumatera Utara 2024-2027',
                'category' => 'Kegiatan Organisasi',
                'year' => 2024,
                'location' => 'Samosir',
                'event_date' => '2024-04-10',
                'photo_count' => 31,
                'thumbnail' => '/images/batak_festival.jpg',
            ],
            [
                'title' => 'Turnamen Olahraga Parna Cup',
                'category' => 'Sosial & Budaya',
                'year' => 2024,
                'location' => 'Balige, Toba',
                'event_date' => '2024-03-24',
                'photo_count' => 27,
                'thumbnail' => '/images/hero_toba.png',
            ],
            [
                'title' => 'Seminar Adat & Budaya Batak',
                'category' => 'Pelatihan & Seminar',
                'year' => 2024,
                'location' => 'Medan',
                'event_date' => '2024-04-05',
                'photo_count' => 15,
                'thumbnail' => '/images/batak_festival.jpg',
            ],
            [
                'title' => 'Gotong Royong Marga Parna',
                'category' => 'Sosial & Budaya',
                'year' => 2024,
                'location' => 'Balige, Toba',
                'event_date' => '2024-01-21',
                'photo_count' => 19,
                'thumbnail' => '/images/hero_toba.png',
            ],
            [
                'title' => 'Kunjungan Silaturahmi Wilayah',
                'category' => 'Kegiatan Organisasi',
                'year' => 2023,
                'location' => 'Pematang Siantar',
                'event_date' => '2023-12-17',
                'photo_count' => 22,
                'thumbnail' => '/images/batak_festival.jpg',
            ],
            [
                'title' => 'Aksi Donor Darah Parna',
                'category' => 'Sosial & Budaya',
                'year' => 2023,
                'location' => 'Medan',
                'event_date' => '2023-11-10',
                'photo_count' => 16,
                'thumbnail' => '/images/hero_toba.png',
            ],
        ];

        foreach ($albums as $album) {
            Galeri::updateOrCreate(
                ['slug' => Str::slug($album['title'])],
                [
                    'title' => $album['title'],
                    'category' => $album['category'],
                    'year' => $album['year'],
                    'location' => $album['location'],
                    'event_date' => $album['event_date'],
                    'photo_count' => $album['photo_count'],
                    'thumbnail' => $album['thumbnail'],
                ]
            );
        }
    }
}
