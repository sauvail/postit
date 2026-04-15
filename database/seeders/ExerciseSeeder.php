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
                'name' => 'Dumbbell Bench Press',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Chest', 'Triceps', 'Shoulders'],
                'type' => 'weight',
                'description' => 'A dumbbell variation allowing for greater range of motion and unilateral work.',
                'variations' => [
                    ['name' => 'Incline', 'description' => 'On an incline bench for upper chest'],
                    ['name' => 'Decline', 'description' => 'On a decline bench for lower chest'],
                    ['name' => 'Single-Arm', 'description' => 'Working one arm at a time'],
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
            [
                'name' => 'Cable Crossover',
                'equipment' => 'Cable',
                'body_parts' => ['Chest'],
                'type' => 'weight',
                'description' => 'A cable exercise providing constant tension throughout the movement.',
                'variations' => [
                    ['name' => 'High-to-Low', 'description' => 'Starting high and crossing down for lower chest'],
                    ['name' => 'Low-to-High', 'description' => 'Starting low and crossing up for upper chest'],
                ]
            ],
            [
                'name' => 'Chest Dip',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Chest', 'Triceps', 'Shoulders'],
                'type' => 'bodyweight',
                'description' => 'A bodyweight dip with forward lean to emphasize chest.',
                'variations' => [
                    ['name' => 'Weighted', 'description' => 'Adding weight via belt or vest'],
                ]
            ],
            [
                'name' => 'Pec Deck',
                'equipment' => 'Machine',
                'body_parts' => ['Chest'],
                'type' => 'weight',
                'description' => 'A machine-based chest fly for isolated chest work.',
                'variations' => []
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
                'name' => 'Lat Pulldown',
                'equipment' => 'Cable',
                'body_parts' => ['Back', 'Biceps'],
                'type' => 'weight',
                'description' => 'A cable exercise targeting the latissimus dorsi muscles.',
                'variations' => [
                    ['name' => 'Close-Grip', 'description' => 'Narrow grip for more middle back'],
                    ['name' => 'Wide-Grip', 'description' => 'Wide grip for outer lats'],
                    ['name' => 'Single-Arm', 'description' => 'Working one side at a time'],
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
            [
                'name' => 'Single-Arm Dumbbell Row',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Back', 'Biceps'],
                'type' => 'weight',
                'description' => 'A unilateral rowing exercise for back development.',
                'variations' => [
                    ['name' => 'Supported', 'description' => 'Bracing on bench for stability'],
                    ['name' => 'Kroc Row', 'description' => 'High-rep heavy variation with body english'],
                ]
            ],
            [
                'name' => 'T-Bar Row',
                'equipment' => 'Barbell',
                'body_parts' => ['Back', 'Biceps'],
                'type' => 'weight',
                'description' => 'A rowing variation using a T-bar or landmine setup.',
                'variations' => [
                    ['name' => 'Chest-Supported', 'description' => 'Using a bench to remove lower back stress'],
                ]
            ],
            [
                'name' => 'Seated Cable Row',
                'equipment' => 'Cable',
                'body_parts' => ['Back', 'Biceps'],
                'type' => 'weight',
                'description' => 'A seated rowing movement with constant cable tension.',
                'variations' => [
                    ['name' => 'Wide-Grip', 'description' => 'Using a wide bar attachment'],
                    ['name' => 'Single-Arm', 'description' => 'Working one side at a time'],
                ]
            ],
            [
                'name' => 'Face Pull',
                'equipment' => 'Cable',
                'body_parts' => ['Shoulders', 'Back'],
                'type' => 'weight',
                'description' => 'A cable pull targeting rear delts and upper back.',
                'variations' => [
                    ['name' => 'Rope', 'description' => 'Using rope attachment'],
                    ['name' => 'Band', 'description' => 'Using resistance band'],
                ]
            ],
            [
                'name' => 'Inverted Row',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Back', 'Biceps'],
                'type' => 'bodyweight',
                'description' => 'A bodyweight rowing exercise under a bar.',
                'variations' => [
                    ['name' => 'Feet Elevated', 'description' => 'Elevating feet to increase difficulty'],
                    ['name' => 'Single-Arm', 'description' => 'Rowing with one arm'],
                ]
            ],
            [
                'name' => 'Hyperextension',
                'equipment' => 'Bench',
                'body_parts' => ['Lower Back', 'Glutes', 'Hamstrings'],
                'type' => 'bodyweight',
                'description' => 'A lower back strengthening exercise.',
                'variations' => [
                    ['name' => 'Weighted', 'description' => 'Holding weight plate or barbell'],
                    ['name' => 'Single-Leg', 'description' => 'Working one leg at a time'],
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
                'name' => 'Arnold Press',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Shoulders'],
                'type' => 'weight',
                'description' => 'A dumbbell press with rotation for complete shoulder development.',
                'variations' => [
                    ['name' => 'Seated', 'description' => 'Performed seated for stability'],
                    ['name' => 'Standing', 'description' => 'Standing variation with core engagement'],
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
            [
                'name' => 'Rear Delt Fly',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Shoulders', 'Back'],
                'type' => 'weight',
                'description' => 'An isolation movement for the posterior deltoid.',
                'variations' => [
                    ['name' => 'Bent-Over', 'description' => 'Performed bent over at waist'],
                    ['name' => 'Cable', 'description' => 'Using cable machine'],
                    ['name' => 'Machine', 'description' => 'Using reverse pec deck machine'],
                ]
            ],
            [
                'name' => 'Upright Row',
                'equipment' => 'Barbell',
                'body_parts' => ['Shoulders', 'Back'],
                'type' => 'weight',
                'description' => 'A vertical pulling movement for shoulders and traps.',
                'variations' => [
                    ['name' => 'Dumbbell', 'description' => 'Using dumbbells'],
                    ['name' => 'Cable', 'description' => 'Using cable machine'],
                ]
            ],
            [
                'name' => 'Shrug',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Shoulders', 'Back'],
                'type' => 'weight',
                'description' => 'An isolation exercise for the trapezius muscles.',
                'variations' => [
                    ['name' => 'Barbell', 'description' => 'Using a barbell'],
                    ['name' => 'Cable', 'description' => 'Using cables'],
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
                'name' => 'Barbell Curl',
                'equipment' => 'Barbell',
                'body_parts' => ['Biceps'],
                'type' => 'weight',
                'description' => 'A barbell bicep curl for mass building.',
                'variations' => [
                    ['name' => 'EZ-Bar', 'description' => 'Using EZ-bar for wrist comfort'],
                    ['name' => 'Wide-Grip', 'description' => 'Wider grip for short head emphasis'],
                    ['name' => 'Close-Grip', 'description' => 'Narrow grip for long head emphasis'],
                ]
            ],
            [
                'name' => 'Preacher Curl',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Biceps'],
                'type' => 'weight',
                'description' => 'An isolated bicep curl using a preacher bench.',
                'variations' => [
                    ['name' => 'Barbell', 'description' => 'Using a barbell'],
                    ['name' => 'Cable', 'description' => 'Using cable machine'],
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
            [
                'name' => 'Skull Crusher',
                'equipment' => 'Barbell',
                'body_parts' => ['Triceps'],
                'type' => 'weight',
                'description' => 'A lying tricep extension targeting all three heads.',
                'variations' => [
                    ['name' => 'Dumbbell', 'description' => 'Using dumbbells'],
                    ['name' => 'EZ-Bar', 'description' => 'Using EZ-bar for wrist comfort'],
                ]
            ],
            [
                'name' => 'Tricep Pushdown',
                'equipment' => 'Cable',
                'body_parts' => ['Triceps'],
                'type' => 'weight',
                'description' => 'A cable isolation exercise for triceps.',
                'variations' => [
                    ['name' => 'Rope', 'description' => 'Using rope attachment'],
                    ['name' => 'Straight Bar', 'description' => 'Using straight bar'],
                    ['name' => 'Single-Arm', 'description' => 'Working one arm at a time'],
                ]
            ],
            [
                'name' => 'Overhead Tricep Extension',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Triceps'],
                'type' => 'weight',
                'description' => 'An overhead tricep extension for long head development.',
                'variations' => [
                    ['name' => 'Two-Arm', 'description' => 'Using one dumbbell with both hands'],
                    ['name' => 'Cable', 'description' => 'Using cable machine'],
                ]
            ],
            [
                'name' => 'Wrist Curl',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Forearms'],
                'type' => 'weight',
                'description' => 'An isolation exercise for forearm flexors.',
                'variations' => [
                    ['name' => 'Reverse', 'description' => 'Palms down for extensors'],
                    ['name' => 'Barbell', 'description' => 'Using a barbell'],
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
                'name' => 'Leg Extension',
                'equipment' => 'Machine',
                'body_parts' => ['Quadriceps'],
                'type' => 'weight',
                'description' => 'An isolation exercise for the quadriceps.',
                'variations' => [
                    ['name' => 'Single-Leg', 'description' => 'Working one leg at a time'],
                ]
            ],
            [
                'name' => 'Leg Curl',
                'equipment' => 'Machine',
                'body_parts' => ['Hamstrings'],
                'type' => 'weight',
                'description' => 'An isolation exercise for the hamstrings.',
                'variations' => [
                    ['name' => 'Lying', 'description' => 'Performed lying face down'],
                    ['name' => 'Seated', 'description' => 'Performed seated'],
                    ['name' => 'Standing', 'description' => 'Single-leg standing variation'],
                ]
            ],
            [
                'name' => 'Hip Thrust',
                'equipment' => 'Barbell',
                'body_parts' => ['Glutes', 'Hamstrings'],
                'type' => 'weight',
                'description' => 'A glute-focused exercise with shoulders on a bench.',
                'variations' => [
                    ['name' => 'Single-Leg', 'description' => 'Working one leg at a time'],
                    ['name' => 'Banded', 'description' => 'Adding resistance band'],
                ]
            ],
            [
                'name' => 'Step-Up',
                'equipment' => 'Box/Step',
                'body_parts' => ['Quadriceps', 'Glutes'],
                'type' => 'bodyweight',
                'description' => 'A unilateral exercise stepping onto an elevated surface.',
                'variations' => [
                    ['name' => 'Weighted', 'description' => 'Holding dumbbells'],
                    ['name' => 'High Box', 'description' => 'Using a higher box for more difficulty'],
                ]
            ],
            [
                'name' => 'Calf Raise',
                'equipment' => 'Machine',
                'body_parts' => ['Calves'],
                'type' => 'weight',
                'description' => 'An isolation exercise for the calf muscles.',
                'variations' => [
                    ['name' => 'Standing', 'description' => 'Performed standing'],
                    ['name' => 'Seated', 'description' => 'Performed seated for soleus emphasis'],
                    ['name' => 'Single-Leg', 'description' => 'Working one calf at a time'],
                ]
            ],
            [
                'name' => 'Glute Bridge',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Glutes', 'Hamstrings'],
                'type' => 'bodyweight',
                'description' => 'A glute activation exercise performed lying on back.',
                'variations' => [
                    ['name' => 'Single-Leg', 'description' => 'Working one leg at a time'],
                    ['name' => 'Weighted', 'description' => 'Placing weight on hips'],
                ]
            ],
            [
                'name' => 'Good Morning',
                'equipment' => 'Barbell',
                'body_parts' => ['Hamstrings', 'Lower Back', 'Glutes'],
                'type' => 'weight',
                'description' => 'A hip hinge movement targeting the posterior chain.',
                'variations' => [
                    ['name' => 'Seated', 'description' => 'Performed seated'],
                ]
            ],
            [
                'name' => 'Hack Squat',
                'equipment' => 'Machine',
                'body_parts' => ['Quadriceps', 'Glutes'],
                'type' => 'weight',
                'description' => 'A machine squat variation emphasizing quads.',
                'variations' => [
                    ['name' => 'Reverse', 'description' => 'Facing away from the machine'],
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
                'name' => 'Crunch',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Abs'],
                'type' => 'reps',
                'description' => 'A classic abdominal exercise targeting the rectus abdominis.',
                'variations' => [
                    ['name' => 'Bicycle', 'description' => 'Alternating elbow to opposite knee'],
                    ['name' => 'Reverse', 'description' => 'Lifting hips instead of shoulders'],
                    ['name' => 'Cable', 'description' => 'Using cable machine for resistance'],
                ]
            ],
            [
                'name' => 'Sit-up',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Abs', 'Hip Flexors'],
                'type' => 'reps',
                'description' => 'A full range of motion abdominal exercise.',
                'variations' => [
                    ['name' => 'Weighted', 'description' => 'Holding weight plate'],
                    ['name' => 'Decline', 'description' => 'On a decline bench'],
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
            [
                'name' => 'Leg Raise',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Abs', 'Hip Flexors'],
                'type' => 'reps',
                'description' => 'A lower ab exercise performed lying or hanging.',
                'variations' => [
                    ['name' => 'Hanging', 'description' => 'Hanging from pull-up bar'],
                    ['name' => 'Bent-Knee', 'description' => 'Knees bent for easier variation'],
                ]
            ],
            [
                'name' => 'Mountain Climber',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Core', 'Abs', 'Shoulders'],
                'type' => 'reps',
                'description' => 'A dynamic core exercise with cardio benefits.',
                'variations' => [
                    ['name' => 'Cross-Body', 'description' => 'Bringing knee to opposite elbow'],
                    ['name' => 'Slow', 'description' => 'Slower tempo for more control'],
                ]
            ],
            [
                'name' => 'Ab Wheel Rollout',
                'equipment' => 'Other',
                'body_parts' => ['Abs', 'Core', 'Shoulders'],
                'type' => 'reps',
                'description' => 'An advanced core exercise using an ab wheel.',
                'variations' => [
                    ['name' => 'Kneeling', 'description' => 'From knees for easier variation'],
                    ['name' => 'Standing', 'description' => 'Advanced full-body version'],
                ]
            ],
            [
                'name' => 'Dead Bug',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Core', 'Abs'],
                'type' => 'reps',
                'description' => 'A core stability exercise performed on back.',
                'variations' => [
                    ['name' => 'Weighted', 'description' => 'Holding light dumbbells'],
                ]
            ],
            [
                'name' => 'Pallof Press',
                'equipment' => 'Cable',
                'body_parts' => ['Core', 'Obliques'],
                'type' => 'reps',
                'description' => 'An anti-rotation core exercise using cables.',
                'variations' => [
                    ['name' => 'Half-Kneeling', 'description' => 'From half-kneeling position'],
                    ['name' => 'Band', 'description' => 'Using resistance band'],
                ]
            ],
            [
                'name' => 'Bird Dog',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Core', 'Lower Back'],
                'type' => 'reps',
                'description' => 'A core stability exercise on hands and knees.',
                'variations' => [
                    ['name' => 'Weighted', 'description' => 'Adding ankle weights'],
                ]
            ],

            // Olympic Lifts
            [
                'name' => 'Clean',
                'equipment' => 'Barbell',
                'body_parts' => ['Full Body', 'Legs', 'Back', 'Shoulders'],
                'type' => 'weight',
                'description' => 'An Olympic lift pulling the bar from floor to shoulders.',
                'variations' => [
                    ['name' => 'Power Clean', 'description' => 'Catching in partial squat'],
                    ['name' => 'Hang Clean', 'description' => 'Starting from hang position'],
                    ['name' => 'Dumbbell', 'description' => 'Using dumbbells'],
                ]
            ],
            [
                'name' => 'Snatch',
                'equipment' => 'Barbell',
                'body_parts' => ['Full Body', 'Legs', 'Back', 'Shoulders'],
                'type' => 'weight',
                'description' => 'An Olympic lift pulling the bar from floor to overhead in one motion.',
                'variations' => [
                    ['name' => 'Power Snatch', 'description' => 'Catching in partial squat'],
                    ['name' => 'Hang Snatch', 'description' => 'Starting from hang position'],
                    ['name' => 'Dumbbell', 'description' => 'Using dumbbells'],
                ]
            ],
            [
                'name' => 'Clean and Jerk',
                'equipment' => 'Barbell',
                'body_parts' => ['Full Body', 'Legs', 'Back', 'Shoulders'],
                'type' => 'weight',
                'description' => 'A two-part Olympic lift: clean to shoulders, then jerk overhead.',
                'variations' => [
                    ['name' => 'Split Jerk', 'description' => 'Jerk with split stance'],
                    ['name' => 'Push Jerk', 'description' => 'Jerk with feet staying parallel'],
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
                'name' => 'Box Jump',
                'equipment' => 'Box/Step',
                'body_parts' => ['Legs', 'Glutes'],
                'type' => 'reps',
                'description' => 'A plyometric exercise jumping onto an elevated box.',
                'variations' => [
                    ['name' => 'Single-Leg', 'description' => 'Jumping with one leg'],
                    ['name' => 'Depth Jump', 'description' => 'Stepping down then immediately jumping'],
                ]
            ],
            [
                'name' => 'Kettlebell Swing',
                'equipment' => 'Kettlebell',
                'body_parts' => ['Glutes', 'Hamstrings', 'Core', 'Back'],
                'type' => 'reps',
                'description' => 'A dynamic hip hinge movement with kettlebell.',
                'variations' => [
                    ['name' => 'American', 'description' => 'Swinging overhead'],
                    ['name' => 'Single-Arm', 'description' => 'Working one arm at a time'],
                ]
            ],
            [
                'name' => 'Turkish Get-Up',
                'equipment' => 'Kettlebell',
                'body_parts' => ['Full Body', 'Core', 'Shoulders'],
                'type' => 'reps',
                'description' => 'A complex full-body movement from lying to standing.',
                'variations' => [
                    ['name' => 'Dumbbell', 'description' => 'Using a dumbbell'],
                ]
            ],
            [
                'name' => 'Wall Ball',
                'equipment' => 'Medicine Ball',
                'body_parts' => ['Legs', 'Shoulders', 'Core'],
                'type' => 'reps',
                'description' => 'A squat to overhead throw against a wall.',
                'variations' => []
            ],
            [
                'name' => 'Battle Rope',
                'equipment' => 'Other',
                'body_parts' => ['Arms', 'Shoulders', 'Core'],
                'type' => 'time',
                'description' => 'High-intensity rope waves for conditioning.',
                'variations' => [
                    ['name' => 'Alternating Waves', 'description' => 'Alternating arm waves'],
                    ['name' => 'Slams', 'description' => 'Slamming ropes down'],
                ]
            ],
            [
                'name' => 'Sled Push',
                'equipment' => 'Other',
                'body_parts' => ['Legs', 'Glutes', 'Core'],
                'type' => 'distance',
                'description' => 'Pushing a weighted sled for power and conditioning.',
                'variations' => [
                    ['name' => 'High Handles', 'description' => 'Pushing from high position'],
                    ['name' => 'Low Handles', 'description' => 'Pushing from low position'],
                ]
            ],
            [
                'name' => 'Sled Pull',
                'equipment' => 'Other',
                'body_parts' => ['Legs', 'Back', 'Core'],
                'type' => 'distance',
                'description' => 'Pulling a weighted sled backward or with straps.',
                'variations' => [
                    ['name' => 'Backward', 'description' => 'Walking backward'],
                    ['name' => 'Arm-Over-Arm', 'description' => 'Pulling with rope hand-over-hand'],
                ]
            ],
            [
                'name' => 'Farmer Walk',
                'equipment' => 'Dumbbell',
                'body_parts' => ['Forearms', 'Core', 'Legs'],
                'type' => 'distance',
                'description' => 'Walking while carrying heavy weights at sides.',
                'variations' => [
                    ['name' => 'Single-Arm', 'description' => 'Carrying weight on one side only'],
                    ['name' => 'Kettlebell', 'description' => 'Using kettlebells'],
                ]
            ],
            [
                'name' => 'Thruster',
                'equipment' => 'Barbell',
                'body_parts' => ['Full Body', 'Legs', 'Shoulders'],
                'type' => 'reps',
                'description' => 'A combination of front squat and overhead press.',
                'variations' => [
                    ['name' => 'Dumbbell', 'description' => 'Using dumbbells'],
                    ['name' => 'Single-Arm', 'description' => 'Working one arm at a time'],
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
            [
                'name' => 'Assault Bike',
                'equipment' => 'Machine',
                'body_parts' => ['Full Body', 'Legs', 'Arms'],
                'type' => 'time',
                'description' => 'A fan bike providing full-body cardio conditioning.',
                'variations' => []
            ],
            [
                'name' => 'Treadmill',
                'equipment' => 'Machine',
                'body_parts' => ['Legs', 'Core'],
                'type' => 'distance',
                'description' => 'Running or walking on a motorized belt.',
                'variations' => [
                    ['name' => 'Incline', 'description' => 'Walking or running on an incline'],
                    ['name' => 'Sprint Intervals', 'description' => 'High-intensity sprint intervals'],
                ]
            ],
            [
                'name' => 'Jump Rope',
                'equipment' => 'Other',
                'body_parts' => ['Calves', 'Shoulders', 'Core'],
                'type' => 'time',
                'description' => 'Jumping rope for cardio and coordination.',
                'variations' => [
                    ['name' => 'Double-Under', 'description' => 'Rope passes twice per jump'],
                    ['name' => 'Single-Leg', 'description' => 'Jumping on one leg'],
                ]
            ],
            [
                'name' => 'Bear Crawl',
                'equipment' => 'Bodyweight',
                'body_parts' => ['Full Body', 'Core', 'Shoulders'],
                'type' => 'distance',
                'description' => 'Crawling on hands and feet with hips low.',
                'variations' => [
                    ['name' => 'Backward', 'description' => 'Crawling backward'],
                ]
            ],
            [
                'name' => 'Prowler Push',
                'equipment' => 'Other',
                'body_parts' => ['Legs', 'Core'],
                'type' => 'distance',
                'description' => 'Pushing a loaded prowler sled.',
                'variations' => []
            ],
            [
                'name' => 'Medicine Ball Slam',
                'equipment' => 'Medicine Ball',
                'body_parts' => ['Full Body', 'Core', 'Shoulders'],
                'type' => 'reps',
                'description' => 'Slamming a medicine ball to the ground explosively.',
                'variations' => [
                    ['name' => 'Overhead', 'description' => 'Slamming from overhead position'],
                    ['name' => 'Side-to-Side', 'description' => 'Slamming to alternating sides'],
                ]
            ],
            [
                'name' => 'Tire Flip',
                'equipment' => 'Other',
                'body_parts' => ['Full Body', 'Legs', 'Back'],
                'type' => 'reps',
                'description' => 'Flipping a large tire end over end.',
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
