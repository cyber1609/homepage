<?php

namespace Tests\Browser;

use App\Models\Message;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Login;
use Tests\DuskTestCase;

class MessageTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
    @test
     */
    public function can_leave_a_message()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('contacts')
                ->type('name', 'User')
                ->type('email', 'user@user.com')
                ->type('subject', 'My subject')
                ->type('message', 'My long message')
                ->click('input[type="submit"]')
                ->assertSee('Message sent!');
        });
    }

    /**
    @test
     */
    public function can_view_index_of_messages()
    {
        $messageA = Message::create([
            'name' => 'jorj',
            'email' => 'jorj@jorj.com',
            'subject' => 'Jorj subject',
            'message' => 'Jorj long message',
        ]);

        $messageB = Message::create([
            'name' => 'lama',
            'email' => 'lala@laqla.com',
            'subject' => 'lama subject',
            'message' => 'lama long message',
        ]);
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'role_id' => '1',
            'password' => bcrypt('password')
        ]);
        Role::create([
            'id' => '1',
            'name' => 'admin',
        ]);
        $this->browse(function (Browser $browser) use ($messageA, $messageB, $user) {
            $browser->visit(new Login)
                ->fillInLoginForm($user->email, 'password')
                ->visitRoute('message.index')
                ->assertSee('Name: ' . $messageA->name)
                ->assertSee($messageA->subject)
                ->assertSee($messageA->message)
                ->assertSee('Name: ' . $messageB->name)
                ->assertSee($messageB->subject)
                ->assertSee($messageB->message);
        });
    }
}
