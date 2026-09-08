<?php

use App\Models\Idea;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

test('a user cannot delete another users idea', function () {
    $owner = User::factory()->create();
    $otherUser = User::factory()->create();
    $idea = Idea::factory()->for($owner)->create();

    $this->actingAs($otherUser)
        ->delete(route('idea.destroy', $idea))
        ->assertForbidden(); // Expects 403 HTTP status code

    $this->assertModelExists($idea); // Confirms the idea is still in the DB
});

test('a user can delete their own idea with image', function () {
    $user = User::factory()->create();
    $idea = Idea::factory()->for($user)->create([
        'image_path' => 'images/sample.jpg', // Fake path for testing
    ]);

    $this->actingAs($user)
        ->delete(route('idea.destroy', $idea))
        ->assertRedirect(route('idea.index'));

    $this->assertModelDoesNotExist(Idea::class, $idea->id);
    Storage::disk('public')->assertMissing($idea->image_path); // Image deleted!
});

test('a user can delete their own idea without image', function () {
    $user = User::factory()->create();
    $idea = Idea::factory()->for($user)->create(['image_path' => null]);

    $this->actingAs($user)
        ->delete(route('idea.destroy', $idea))
        ->assertRedirect(route('idea.index'));

    $this->assertModelDoesNotExist(Idea::class, $idea->id);
});

test('a guest cannot delete an idea', function () {
    $user = User::factory()->create();
    $idea = Idea::factory()->for($user)->create([
        'image_path' => 'images/sample.jpg',
    ]);

    $this->actingAsNone()
        ->delete(route('idea.destroy', $idea))
        ->assertStatus(403); // Forbidden

    $this->assertModelExists($idea);
});
