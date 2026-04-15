<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'equipment', 'body_parts', 'type', 'description'])]
class Exercise extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'body_parts' => 'array',
        ];
    }

    public function variations(): HasMany
    {
        return $this->hasMany(ExerciseVariation::class);
    }
}
