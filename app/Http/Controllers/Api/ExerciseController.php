<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::with('variations')->orderBy('name')->get();
        return response()->json($exercises);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:exercises,name',
            'equipment'   => 'nullable|string|max:255',
            'body_parts'  => 'nullable|array',
            'body_parts.*' => 'string|max:100',
            'type'        => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'variations'  => 'nullable|array',
            'variations.*.name'        => 'required|string|max:255',
            'variations.*.description' => 'nullable|string',
        ]);

        $exercise = Exercise::create($request->only(['name', 'equipment', 'body_parts', 'type', 'description']));

        if ($request->filled('variations')) {
            foreach ($request->variations as $variation) {
                $exercise->variations()->create($variation);
            }
        }

        return response()->json($exercise->load('variations'), 201);
    }

    public function show(Exercise $exercise)
    {
        return response()->json($exercise->load('variations'));
    }

    public function update(Request $request, Exercise $exercise)
    {
        $request->validate([
            'name'        => ['string', 'max:255', Rule::unique('exercises', 'name')->ignore($exercise->id)],
            'equipment'   => 'nullable|string|max:255',
            'body_parts'  => 'nullable|array',
            'body_parts.*' => 'string|max:100',
            'type'        => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'variations'  => 'nullable|array',
            'variations.*.name'        => 'required|string|max:255',
            'variations.*.description' => 'nullable|string',
        ]);

        $exercise->update($request->only(['name', 'equipment', 'body_parts', 'type', 'description']));

        if ($request->has('variations')) {
            $exercise->variations()->delete();
            foreach ($request->variations as $variation) {
                $exercise->variations()->create($variation);
            }
        }

        return response()->json($exercise->load('variations'));
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->delete();
        return response()->json(['message' => 'Exercise deleted successfully']);
    }

    public function duplicate(Exercise $exercise)
    {
        $baseName = $exercise->name . ' (copy)';
        $name = $baseName;
        $counter = 2;
        while (Exercise::where('name', $name)->exists()) {
            $name = $baseName . ' ' . $counter;
            $counter++;
        }

        $duplicate = Exercise::create([
            'name'        => $name,
            'equipment'   => $exercise->equipment,
            'body_parts'  => $exercise->body_parts,
            'type'        => $exercise->type,
            'description' => $exercise->description,
        ]);

        foreach ($exercise->variations as $variation) {
            $duplicate->variations()->create([
                'name'        => $variation->name,
                'description' => $variation->description,
            ]);
        }

        return response()->json($duplicate->load('variations'), 201);
    }
}
