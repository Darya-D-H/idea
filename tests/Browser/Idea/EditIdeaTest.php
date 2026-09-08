<?php

use App\Models\User;
use App\Models\Idea;

it('edits an existing idea for a certain auth user', function () {

    $this->actingAs($user = User::factory()->create());

    $idea = Idea::factory()->for($user)->create();

    visit(route('idea.show', $idea))
        ->click('@edit-idea-button')
        ->fill('title', 'Some Example Title')
        ->click('@button-status-completed')
        ->fill('description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.')
        ->fill('@new-link', 'https://example.com')
        ->click('@submit-new-link-button')
        ->fill('@new-step', 'Plan a test')
        ->click('@submit-new-step-button')
        ->press('Update')
        ->assertRoute('idea.show', [$idea]);

    expect($idea = $user->ideas()->first())->toMatchArray([
        'title' => 'Some Example Title',
        'status' => 'completed',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        'links' => [ $idea->links[0], 'https://example.com'],
    ]);

    expect($idea->steps)->toHaveCount(1);
});
