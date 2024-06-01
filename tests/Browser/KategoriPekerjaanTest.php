<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\KategoriPekerjaan;

class KategoriPekerjaanTest extends DuskTestCase
{

    protected function setUp(): void
    {
        parent::setUp();

        // Run the dusk seeder
        $this->artisan('db:seed', ['--class' => 'Database\\Seeders\\KategoriPekerjaanSeeder']);
    }

    public function testCreateKategoriPekerjaan()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                  ->visit('/dashboard');
        });
        $this->browse(function (Browser $browser) {
            $browser->visit('/kategoripekerjaan')
                    ->type('nama_kategori')
                    ->type('deskripsi')
                    ->press('Simpan')
                    ->assertPathIs('/kategoripekerjaan')
                    ->assertSee('Data baru berhasil ditambahkan');
        });
    }

    public function testEditKategoriPekerjaan()
    {
        $kategori = KategoriPekerjaan::create([
            'nama_kategori' => 'Old Category',
            'deskripsi' => 'Old description.'
        ]);

        $this->browse(function (Browser $browser) use ($kategori) {
            $browser->visit('/produksi-manufaktur/' . $kategori->id)
                    ->click('#editButton')
                    ->type('deskripsi', 'Updated description.')
                    ->press('Save')
                    ->assertPathIs('/produksi-manufaktur/' . $kategori->id)
                    ->assertSee('berhasil ngupdate data');
        });
    }

    public function testDeleteKategoriPekerjaan()
    {
        $kategori = KategoriPekerjaan::create([
            'nama_kategori' => 'Category to delete',
            'deskripsi' => 'Description of category to delete.'
        ]);

        $this->browse(function (Browser $browser) use ($kategori) {
            $browser->visit('/produksi-manufaktur/' . $kategori->id)
                    ->press('Delete')
                    ->assertPathIs('/kategoripekerjaan')
                    ->assertSee('Data deleted successfully.');
        });
    }
}
