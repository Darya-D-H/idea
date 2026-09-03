<?php

use App\Models\User;
use App\Models\Idea;

it('creates a new idea for a certain auth user', function () {

    $this->actingAs($user = User::factory()->create());

    visit('/ideas')
        ->click('@create-idea-button')
        ->fill('title', 'Some Example Title')
        ->click('@button-status-completed')
        ->fill('description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.')
        ->fill('@new-link','https://example.com')
        ->click('@submit-new-link-button')
        ->fill('@new-link','https://laravel.com')
        ->click('@submit-new-link-button')
        ->press('Create')
        ->assertPathIs('/ideas');

    expect($user->ideas()->first())->toMatchArray([
        'title' => 'Some Example Title',
        'status' => 'completed',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        'links'=> ['https://example.com','https://laravel.com'],
    ]);
});
