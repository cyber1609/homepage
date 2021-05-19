<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\Browser\Components\Logout;
use Tests\Browser\Pages\Login;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
    @test
     */
    public function a_user_can_register_correctly()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('register')
                ->type('name', $name = 'Jojoba')
                ->type('email', 'jojoba@jojo.ba')
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->press('Register')
                ->assertSee('You are logged in')
                ->within(new Logout(), function ($browser) use ($name) {
                    $browser->logoutUser($name);
                });
        });
    }

    /**
    @test
     */
    public function a_user_can_login_correctly()
    {
        $user = User::create([
            'name' => 'jorj',
            'email' => 'jorj@jorj.com',
            'password' => bcrypt('password')
        ]);
        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit(new Login)
                ->fillInLoginForm($user->email, 'password')
                ->within(new Logout(), function ($browser) use ($user) {
                    $browser->logoutUser($user->name);
                });
        });
    }
}
