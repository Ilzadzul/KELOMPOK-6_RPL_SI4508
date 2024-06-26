<?php

namespace Database\Seeders;

use App\Models\HasilTest;
use App\Models\HasilTestDetail;
use App\Models\Penduduk;
use App\Models\TestUjiKemampuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HasilTestUjiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // penduduk
        $data_penduduk  = Penduduk::get();
        $data_test = TestUjiKemampuan::with('details')->get();


        foreach ($data_penduduk as $penduduk) {
            // buat hasil test dengan test looping
            foreach ($data_test as $test) {
                // buat hasil
                $ht  = HasilTest::create([
                    'penduduk_id' => $penduduk->id,
                    'test_uji_kemampuan_id' => $test->id
                ]);

                // buat detail hasil
                foreach ($test->details as $detail) {
                    HasilTestDetail::create([
                        'hasil_test_id' => $ht->id,
                        'test_detail_id' => $detail->id,
                        'nilai' => rand(50, 100)
                    ]);
                }
            }
        }
    }
}
