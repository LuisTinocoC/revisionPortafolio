<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Administrator;
use App\Models\User;

class AdministratorTest extends TestCase
{
    public function test_administrator_belongs_to_user()
    {
        $user = User::factory()->create([
            'name' => 'Karelia',
            'email' => 'kareila.medina@unsaac.edu.pe',
            'password' => 'Hola Mundo'
        ]);
        $administrator = Administrator::create([
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password
        ]);

        $this->assertEquals($user->email, $administrator->email);

        $administrator->delete();
        $user->delete();
    }
}
