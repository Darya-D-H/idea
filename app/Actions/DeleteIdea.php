<?php

namespace App\Actions;

use App\Models\Idea;
use Illuminate\Support\Facades\Storage;

class DeleteIdea
{
    public function handle(Idea $idea): void
    {
        if ($idea->image_path) {
            Storage::disk('public')->delete($idea->image_path);
        }

        $idea->delete();
    }
}
