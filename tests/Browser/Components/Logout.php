<?php

namespace Tests\Browser\Components;

use App\Models\User;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Component as BaseComponent;

class Logout extends BaseComponent
{
    /**
     * Get the root selector for the component.
     *
     * @return string
     */
    public function selector()
    {
        return '';
    }

    /**
     * Assert that the browser page contains the component.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertSee('Homepage');
    }

    /**
     * Get the element shortcuts for the component.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@element' => '#selector',
        ];
    }

    public function logoutUser(Browser $browser, $name)
    {
        $browser->clickLink($name)
        ->clickLink('Logout')
        ->assertSee('Hello world!');
    }
}
