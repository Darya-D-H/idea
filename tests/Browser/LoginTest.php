<?php

use App\Models\User;

test('logs in a user', function (): void {

    $user = User::factory()->create(['password' => '20192010']);

    visit('/login')
        ->fill('email', $user->email)
        ->fill('password', '20192010')
        ->press('Sign in')
        ->assertPathIs('/');

    $this->assertAuthenticated();

});

test('logs out a user', function (): void {

    $user = User::factory()->create(['password' => '20192010']);

    $this->actingAs($user);

    visit('/')->press('Log Out');
        
    $this->assertGuest();

});