<?php

use Illuminate\Support\Facades\Auth;

test('registers a user', function (): void {
    visit('/register')
        ->fill('name', 'Jane Doe')
        ->fill('email', 'jane@example.com')
        ->fill('password', '20192010')
        ->press('Create Account')
        ->assertPathIs('/');

    $this->assertAuthenticated();

    expect(Auth::user())->toMatchArray([
        'name' => 'Jane Doe',
        'email' => 'jane@example.com'
    ]);

});

test('requires a valid email', function (): void {
    visit('/register')
        ->fill('name', 'Jane Doe')
        ->fill('email', 'janedoe')
        ->fill('password', '20192010')
        ->press('Create Account')
        ->assertPathIs('/register');

});