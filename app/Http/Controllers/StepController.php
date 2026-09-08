<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Step;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StepController extends Controller
{
    public function update(Step $step, Request $request)
    {
        Gate::authorize('workWith', $step->idea);

        $step->update(['completed' => ! $step->completed]);

        return back();
    }
}
