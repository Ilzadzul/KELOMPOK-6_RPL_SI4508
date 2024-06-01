<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Penduduk;
use App\Models\User;
use App\Models\Kelurahans;

class KelurahanTest extends DuskTestCase
{
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();

        // Run the dusk seeder
        $this->artisan('db:seed', ['--class' => 'Database\\Seeders\\DuskDatabaseSeeder']);
    }

    public function testPrecondition(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/dashboard');
            });

            $this->browse(function (Browser $browser) {
                $browser->visit('/wilayah')
                    ->assertSee('Wilayah Terkait')
                    ->assertSee('Add Kelurahan');
        });
    }

    public function testtc_wil_01(): void //test ADD mengisi required
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/wilayah')
                ->clickLink('Add Kelurahan')
                ->assertPathIs('/tambahkelurahan');

            $browser->type('name','Kelurahan req. ISI SEMUA')
                    ->type('deskripsi','')
                    ->scrollTo('button[type="submit"]')
                    ->script('document.querySelector("button[type=submit]").click();');

            $browser->waitForLocation('/wilayah');

            $browser->assertSee('Kelurahan baru berhasil ditambahkan')
                    ->pause(1000);

            $this->assertDatabaseHas('kelurahans', [
                'name' => 'Kelurahan req. ISI SEMUA',
                'deskripsi' => null // allow null for empty string
            ]);

            $browser->visit('/wilayah')
            ->waitFor('.accordion', 10)
            ->click('.accordion')
            ->pause(500)  // wait for the accordion to expand
            ->assertSee('Kelurahan req. ISI SEMUA');
        });
    }

    public function testtc_wil_02(): void //test ADD req. no isi
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/wilayah')
                ->clickLink('Add Kelurahan')
                ->assertPathIs('/tambahkelurahan');

            $browser->type('name','')
                    ->type('deskripsi','req kosong')
                    ->scrollTo('button[type="submit"]')
                    ->script('document.querySelector("button[type=submit]").click();');

            $browser->assertPathIs('/tambahkelurahan')
                    ->assertVisible('.invalid-feedback');

            $browser->visit('/wilayah')
                    ->assertDontSee('Kelurahan baru berhasil ditambahkan');
            $browser->visit('/wilayah')
                    ->waitFor('.accordion', 10)
                    ->click('.accordion')
                    ->pause(500)
                    ->assertDontSee('req kosong');

            $this->assertDatabaseMissing('kelurahans', [
                'name' => '',
                'deskripsi'=>'req kosong'
            ]);
        });
    }

    public function testtc_wil_04(): void // ADD cancel
    {
        //SUPER ADMIN
        $this->browse(function (Browser $browser) {
            $browser->visit('/wilayah')
                ->clickLink('Add Kelurahan')
                ->assertPathIs('/tambahkelurahan');

            $browser->type('name','cancel')
                    ->clickLink('Cancel');

            $browser->assertPathIs('/wilayah')
                    ->assertDontSee('Kelurahan baru berhasil ditambahkan');


            $browser->waitFor('.accordion', 10)
                    ->click('.accordion')
                    ->pause(500)
                    ->assertDontSee('cancel');

            $this->assertDatabaseMissing('kelurahans', [
                'name' => 'cancel'
            ]);

            $browser->visit('/logout')
                ->assertSee('Log In');
        });
    }

    public function testtc_wil_03(): void //test akses ADD by admin
    {
        //ADMIN
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(2))
                    ->visit('/dashboard');
            });

        $this->browse(function (Browser $browser) {
            $browser->visit('/wilayah')
                ->clickLink('Add Kelurahan')
                ->assertPathIsNot('/tambahkelurahan')
                ->assertSee('404');
            });
    }
//MASIH ADMIN YA
    public function testtc_wil_05(): void // EDIT admin
    {
        $this->browse(function (Browser $browser) {
            //cek di database kelurahan b ada berapa
            $browser->visit('/databasependuduk')
                    ->waitForText('Kelurahan B');

            $pageText = $browser->driver->findElement(\Facebook\WebDriver\WebDriverBy::tagName('body'))->getText();
            $count1 = substr_count($pageText, 'Kelurahan B');
            echo 'The text "Kelurahan B" di database sebelum edit appears ' . $count1 . ' times' . "\n" ;

            //melakukan edit
            $browser->visit('/wilayah')
                    ->pause(1000)
                    ->click('.accordion')
                    ->assertSee('Kelurahan B');

            $id = Kelurahans::where('name', 'Kelurahan B')->value('id');

            if ($id) {
                $browser->visit('/editkelurahan/' . $id)
                    ->assertSee('Edit Kelurahan')
                    ->assertSee('Kelurahan B');

                $browser->type('name', 'Kelurahan edit')
                    ->scrollTo('button[type="submit"]') // Scroll to the submit button
                    ->script('document.querySelector("button[type=submit]").click();'); // Click the submit button using JavaScript

                $browser->waitForLocation('/wilayah')
                ->assertSee('Kelurahan berhasil diperbarui');
            }
            $this->assertDatabaseHas('kelurahans', [
                'name' => 'Kelurahan edit'
            ]);

            //liat udah update si nama wilayahny
            $browser->visit('/wilayah')
                    ->scrollIntoView('button.accordion:nth-of-type(2)')
                    ->click('button.accordion:nth-of-type(2)')
                    ->assertDontSee('Kelurahan B')
                    ->waitForText('Kelurahan edit');

                $browser->script("document.evaluate(\"//*[contains(text(), 'Kelompok 6')]\", document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.scrollIntoView();");

                $pageText2 = $browser->driver->findElement(\Facebook\WebDriver\WebDriverBy::tagName('body'))->getText();
                $count2 = substr_count($pageText2, 'Kelurahan edit');

                echo 'The text "Kelurahan edit" di wilayah appears ' . $count2 . ' times.' . "\n";
                $browser->pause(1000);

                //cek di database kelurahan edit ada berapa
                $browser->visit('/databasependuduk')
                ->waitForText('Kelurahan edit');

                $pageText = $browser->driver->findElement(\Facebook\WebDriver\WebDriverBy::tagName('body'))->getText();
                $count3 = substr_count($pageText, 'Kelurahan edit');
                echo 'The text "Kelurahan edit" di database appears setelah edit ' . $count3 . ' times.' . "\n";

                //cek di database ada gak kelurahan B
                $pageText = $browser->driver->findElement(\Facebook\WebDriver\WebDriverBy::tagName('body'))->getText();
                $count4 = substr_count($pageText, 'Kelurahan B');
                echo 'The text "Kelurahan B" di database appears setelah edit ' . $count4 . ' times.' . "\n";

                $this->assertEquals($count1, $count3);

        });
    }
//MASIH ADMIN YA
    public function testtc_wil_06(): void //admin /EDIT CANCEL
    {
        $this->browse(function (Browser $browser) {
            //cek di database kelurahan b ada berapa
            $browser->visit('/databasependuduk')
                    ->waitForText('Kelurahan B');

            $pageText = $browser->driver->findElement(\Facebook\WebDriver\WebDriverBy::tagName('body'))->getText();
            $count0 = substr_count($pageText, 'Kelurahan B');
            echo 'COUNT 0 The text "Kelurahan B" di DATABASE sebelum BANGET ' . $count0 . ' times' . "\n" ;

            //melakukan edit
            $browser->visit('/wilayah')
                    ->pause(1000)
                    ->click('.accordion')
                    ->assertSee('Kelurahan B');

            $id = Kelurahans::where('name', 'Kelurahan B')->value('id');

            if ($id) {
                $browser->visit('/editkelurahan/' . $id)
                    ->assertSee('Edit Kelurahan')
                    ->assertSee('Kelurahan B');

                $browser->type('name', 'Kelurahan edit')
                        ->clickLink('Cancel');

                $browser->assertPathIs('/wilayah')
                        ->assertDontSee('Kelurahan berhasil diperbarui');
            }

            //pastiin no update si nama wilayahny
            $browser->visit('/wilayah')
                    ->scrollIntoView('button.accordion:nth-of-type(2)')
                    ->click('button.accordion:nth-of-type(2)')
                    ->assertSee('Kelurahan B')
                    ->assertDontSee('Kelurahan edit');

                $browser->script("document.evaluate(\"//*[contains(text(), 'Kelompok 6')]\", document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue.scrollIntoView();");

                $pageText1 = $browser->driver->findElement(\Facebook\WebDriver\WebDriverBy::tagName('body'))->getText();
                $count1 = substr_count($pageText1, 'Kelurahan B');
                $simpen1= 1 ;
                echo 'COUNT 1 The text "Kelurahan B" di WILAYAH appears sebelum BANGET ' . $count1 . ' times.' . "\n";
                $browser->pause(1000);
                $this->assertEquals($count1, $simpen1);

                $pageText2 = $browser->driver->findElement(\Facebook\WebDriver\WebDriverBy::tagName('body'))->getText();
                $count2 = substr_count($pageText2, 'Kelurahan edit');
                $simpen2= 0 ;
                echo 'COUNT 2 The text "Kelurahan edit" di wilayah appears setelah cancel ' . $count2 . ' times.' . "\n";
                $browser->pause(1000);
                $this->assertEquals($count2, $simpen2);

                //cek di database kelurahan edit ada berapa
                $browser->visit('/databasependuduk');

                $pageText = $browser->driver->findElement(\Facebook\WebDriver\WebDriverBy::tagName('body'))->getText();
                $count3 = substr_count($pageText, 'Kelurahan edit');
                echo 'COUNT 3 The text "Kelurahan edit" di database appears setelah cancel ' . $count3 . ' times.' . "\n";
                $this->assertEquals($count3, $simpen2);

                //cek di database ada gak kelurahan B
                $pageText = $browser->driver->findElement(\Facebook\WebDriver\WebDriverBy::tagName('body'))->getText();
                $count4 = substr_count($pageText, 'Kelurahan B');
                echo 'COUNT 4 The text "Kelurahan B" di database appears setelah cancel ' . $count4 . ' times.' . "\n";
                $this->assertEquals($count1, $count0, $count4);
                $this->assertEquals($count3, $count2);
        });

        $this->assertDatabaseMissing('kelurahans', [
            'name' => 'Kelurahan edit'
        ]);
    }
//MASIH ADMIN YA
    public function testtc_wil_07(): void //test EDIT req. no isi
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/wilayah');

            $id = Kelurahans::where('name', 'Kelurahan B')->value('id');

            if ($id) {
                $browser->visit('/editkelurahan/' . $id)
                    ->assertSee('Edit Kelurahan')
                    ->assertSee('Kelurahan B');

                $browser->type('name', '')
                        ->type('deskripsi', 'req kosong')
                        ->scrollTo('button[type="submit"]')
                        ->script('document.querySelector("button[type=submit]").click();');
            }

            $browser->assertPathIs('/editkelurahan/' .$id)
                    ->assertVisible('.invalid-feedback');

            $browser->visit('/wilayah')
                    ->assertDontSee('Kelurahan baru berhasil ditambahkan');
            $browser->visit('/wilayah')
                    ->waitFor('.accordion', 10)
                    ->click('.accordion')
                    ->pause(500)
                    ->assertDontSee('req kosong')
                    ->assertSee('Kelurahan B');
        });
        $this->assertDatabaseMissing('kelurahans', [
            'deskripsi' => 'req kosong',
            'name' => null // allow null for empty string
        ]);
    }
//MASIH ADMIN YA
    public function testtc_wil_09():void //DELETE by admin
    {
        //this test case to check that user cant delete kelurahan data
        $this->browse(function (Browser $browser) {
            $browser->visit('/wilayah')
                    ->waitFor('.accordion', 10)
                    ->click('.accordion')
                    ->pause(500)
                    ->assertSee('Kelurahan A')
                    ->assertSee('Delete')
                    ->press('Delete');

            $browser->assertDontSee('Kelurahan berhasil dihapus')
                    ->assertSee(404)
                    ->visit('/wilayah')
                    ->assertSee('Kelurahan A')
                    ->waitFor('.accordion', 10)
                    ->click('.accordion')
                    ->pause(500)
                    ->assertSee('Kelurahan A');

            $browser->visit('/logout')
            ->assertSee('Log In');
        });

        $this->assertDatabaseHas('kelurahans', [
            'name' => 'Kelurahan A'
        ]);
    }
//ADMIN DAH LOGOUT YAA
//SEKARANG SUPER ADMIN YAA
    public function testtc_wil_08():void //DELETE by superadmin
    {
        //this test case to check that user cant delete kelurahan data
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/wilayah')
                    ->waitFor('.accordion', 10)
                    ->click('.accordion')
                    ->pause(500)
                    ->assertSee('Kelurahan A')
                    ->assertSee('Delete')
                    ->press('Delete');

            $browser->assertSee('Kelurahan berhasil dihapus')
                    ->assertDontSee(404)
                    ->visit('/wilayah')
                    ->assertDontSee('Kelurahan A')
                    ->waitFor('.accordion', 10)
                    ->click('.accordion')
                    ->pause(500)
                    ->assertDontSee('Kelurahan A');

            $browser->visit('/logout')
            ->assertSee('Log In');
        });

        $this->assertDatabaseMissing('kelurahans', [
            'name' => 'Kelurahan A'
        ]);
    }
}
