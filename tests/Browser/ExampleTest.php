<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *@test
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }
}

/*
$browser->visit('/register')
                    ->assertSee('')
                    ->type('email', 'bachurahul1111@gmail.com')
                    ->type('password', '1234567890')
                    ->press('Register')
                    ->assertPathIs('/dashboard')
                    ->assertSee('Dashboard')
*/