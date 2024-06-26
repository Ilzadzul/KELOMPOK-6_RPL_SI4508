<?php

namespace Database\Seeders;

use App\Models\TestUjiKemampuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestUjiKemampuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TestUjiKemampuan::factory(20)->create();

        $test = TestUjiKemampuan::create([
            'nama_test' => 'Bahasa PHP',
            'tanggal_pelaksanaan' => fake()->date(),
            'tempat_pelaksanaan' => fake()->address(),
            'anggota_test' => fake()->sentence(4)
        ]);

        $test->details()->create([
            'nama' => 'Pemahaman Array'
        ]);
        $test->details()->create([
            'nama' => 'Pemahaman Variabel'
        ]);
        $test->details()->create([
            'nama' => 'Pemahaman Looping'
        ]);

        $test1 = TestUjiKemampuan::create([
            'nama_test' => 'Bahasa Javascript',
            'tanggal_pelaksanaan' => fake()->date(),
            'tempat_pelaksanaan' => fake()->address(),
            'anggota_test' => fake()->sentence(4)
        ]);

        $test1->details()->create([
            'nama' => 'Pemahaman Node JS'
        ]);
        $test1->details()->create([
            'nama' => 'Pemahaman ES6'
        ]);
        $test1->details()->create([
            'nama' => 'Pemahaman Functional Component'
        ]);
    }
}
