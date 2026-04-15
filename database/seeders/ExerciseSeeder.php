<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises = [
            // Upper Body - Chest
            [
                'name' => 'Bench Press',
                'equipment' => 'Barbell',
                'body_parts' => ['Chest', 'Triceps', 'Shoulders'],
                'type' => 'weight',
                'description' => 'A compound upper body exercise targeting the chest, shoulders, and triceps.',
                'variations' => [
                    ['name' => 'Incline', 'description' => 'Performed on an incline bench to target upper chest'],
                    ['name' => 'Decline', 'description' => 'Performed on a decline bench to target lower chest'],
                    ['name' => 'Close-Grip', 'description' => 'Narrow grip to emphasize triceps'],
                ]
            ],
            [
                'name' => 'Push-up',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Chest', 'Triceps', 'Shoulders', 'Core'],
                'type' => 'bodyweight',
                'description' => 'A bodyweight exercise that strengthens the chest, arms, and core.',
                'variations' => [
                    ['name' => 'Diamond', 'description' => 'Hands together to emphasize triceps'],
                    ['name' => 'Wide-Grip', 'description' => 'Wider hand placement for more chest activation'],
                    ['name' => 'Decline', 'description' => 'Feet elevated to increase difficulty'],
                ]
            ],
            [
                'name' => 'Dumbbell Fly',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Chest'],
                'type' => 'weight',
                'description' => 'An isolation exercise that stretches and strengthens the chest muscles.',
                'variations' => [
                    ['name' => 'Incline', 'description' => 'Performed on an incline bench'],
                    ['name' => 'Cable', 'description' => 'Using cable machine for constant tension'],
                ]
            ],

            // Upper Body - Back
            [
                'name' => 'Pull-up',
                'equipment' => 'Pull-up Bar',
                'body_parts' => ['Back', 'Biceps', 'Shoulders'],
                'type' => 'bodyweight',
                'description' => 'A compound exercise that builds upper body pulling strength.',
                'variations' => [
                    ['name' => 'Chin-up', 'description' => 'Underhand grip emphasizing biceps'],
                    ['name' => 'Wide-Grip', 'description' => 'Wider grip for more lat activation'],
                    ['name' => 'Weighted', 'description' => 'Adding weight for increased resistance'],
                ]
            ],
            [
                'name' => 'Deadlift',
                'equipment' => 'Barbell',
                'body_parts' => ['Back', 'Glutes', 'Hamstrings', 'Core'],
                'type' => 'weight',
                'description' => 'A fundamental compound lift targeting the entire posterior chain.',
                'variations' => [
                    ['name' => 'Sumo', 'description' => 'Wide stance emphasizing glutes and inner thighs'],
                    ['name' => 'Romanian', 'description' => 'Focuses on hamstrings with less knee bend'],
                    ['name' => 'Trap Bar', 'description' => 'Using a trap bar for more quad involvement'],
                ]
            ],
            [
                'name' => 'Bent-Over Row',
                'equipment' => 'Barbell',
                'body_parts' => ['Back', 'Biceps'],
                'type' => 'weight',
                'description' => 'A compound rowing movement that builds back thickness.',
                'variations' => [
                    ['name' => 'Dumbbell', 'description' => 'Using dumbbells for unilateral work'],
                    ['name' => 'Pendlay', 'description' => 'Starting from the floor each rep'],
                ]
            ],

            // Upper Body - Shoulders
            [
                'name' => 'Overhead Press',
                'equipment' => 'Barbell',
                'body_parts' => ['Shoulders', 'Triceps'],
                'type' => 'weight',
                'description' => 'A fundamental overhead pressing movement for shoulder strength.',
                'variations' => [
                    ['name' => 'Seated', 'description' => 'Performed seated for more isolation'],
                    ['name' => 'Dumbbell', 'description' => 'Using dumbbells for greater range of motion'],
                    ['name' => 'Push Press', 'description' => 'Using leg drive to lift heavier loads'],
                ]
            ],
            [
                'name' => 'Lateral Raise',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Shoulders'],
                'type' => 'weight',
                'description' => 'An isolation exercise targeting the medial deltoid.',
                'variations' => [
                    ['name' => 'Cable', 'description' => 'Using cables for constant tension'],
                    ['name' => 'Front Raise', 'description' => 'Raising weights to the front'],
                ]
            ],

            // Upper Body - Arms
            [
                'name' => 'Bicep Curl',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Biceps'],
                'type' => 'weight',
                'description' => 'A classic isolation exercise for the biceps.',
                'variations' => [
                    ['name' => 'Hammer', 'description' => 'Neutral grip emphasizing brachialis'],
                    ['name' => 'Concentration', 'description' => 'Seated with elbow braced on thigh'],
                    ['name' => 'Cable', 'description' => 'Using cable machine for constant tension'],
                ]
            ],
            [
                'name' => 'Tricep Dip',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Triceps', 'Chest', 'Shoulders'],
                'type' => 'bodyweight',
                'description' => 'A compound exercise for triceps and chest strength.',
                'variations' => [
                    ['name' => 'Weighted', 'description' => 'Adding weight for progression'],
                    ['name' => 'Bench', 'description' => 'Using a bench for modified version'],
                ]
            ],

            // Lower Body - Legs
            [
                'name' => 'Squat',
                'equipment' => 'Barbell',
                'body_parts' => ['Quadriceps', 'Glutes', 'Hamstrings', 'Core'],
                'type' => 'weight',
                'description' => 'The king of lower body exercises, building overall leg strength.',
                'variations' => [
                    ['name' => 'Front', 'description' => 'Bar held in front, more quad emphasis'],
                    ['name' => 'Goblet', 'description' => 'Using a dumbbell or kettlebell at chest'],
                    ['name' => 'Bulgarian Split', 'description' => 'Single-leg variation with rear foot elevated'],
                ]
            ],
            [
                'name' => 'Lunge',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Quadriceps', 'Glutes', 'Hamstrings'],
                'type' => 'bodyweight',
                'description' => 'A unilateral leg exercise improving balance and strength.',
                'variations' => [
                    ['name' => 'Walking', 'description' => 'Moving forward with each rep'],
                    ['name' => 'Reverse', 'description' => 'Stepping backward'],
                    ['name' => 'Weighted', 'description' => 'Holding dumbbells or wearing a weighted vest'],
                ]
            ],
            [
                'name' => 'Leg Press',
                'equipment' => 'Machine',
                'body_parts' => ['Quadriceps', 'Glutes', 'Hamstrings'],
                'type' => 'weight',
                'description' => 'A machine-based leg exercise allowing for heavy loads safely.',
                'variations' => [
                    ['name' => 'Single-Leg', 'description' => 'Working one leg at a time'],
                    ['name' => 'High-Foot Placement', 'description' => 'Feet higher on platform for more glute activation'],
                ]
            ],

            // Core
            [
                'name' => 'Plank',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Core', 'Abs', 'Shoulders'],
                'type' => 'time',
                'description' => 'An isometric core exercise building stability and endurance.',
                'variations' => [
                    ['name' => 'Side', 'description' => 'Performed on one side for obliques'],
                    ['name' => 'Weighted', 'description' => 'Adding weight on back'],
                    ['name' => 'Dynamic', 'description' => 'Moving arms or legs while holding plank'],
                ]
            ],
            [
                'name' => 'Russian Twist',
                'equipment' => 'Medicine Ball',
                'body_parts' => ['Abs', 'Obliques'],
                'type' => 'reps',
                'description' => 'A rotational core exercise targeting the obliques.',
                'variations' => [
                    ['name' => 'Weighted', 'description' => 'Holding a weight plate or medicine ball'],
                    ['name' => 'Feet Elevated', 'description' => 'Lifting feet off ground for more difficulty'],
                ]
            ],

            // Cardio/Functional
            [
                'name' => 'Burpee',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Full Body', 'Core'],
                'type' => 'reps',
                'description' => 'A full-body conditioning exercise combining a squat, plank, and jump.',
                'variations' => [
                    ['name' => 'Box Jump', 'description' => 'Jumping onto a box instead of vertical jump'],
                    ['name' => 'Dumbbell', 'description' => 'Holding dumbbells throughout'],
                ]
            ],
            [
                'name' => 'Rowing Machine',
                'equipment' => 'Machine',
                'body_parts' => ['Back', 'Legs', 'Core'],
                'type' => 'distance',
                'description' => 'A low-impact cardio exercise that works the entire body.',
                'variations' => []
            ],
        ];

        foreach ($exercises as $exerciseData) {
            $variations = $exerciseData['variations'] ?? [];
            unset($exerciseData['variations']);

            $exercise = Exercise::create($exerciseData);

            foreach ($variations as $variation) {
                $exercise->variations()->create($variation);
            }
        }
    }
}
