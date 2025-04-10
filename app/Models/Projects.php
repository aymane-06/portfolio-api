<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectsFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'technologies',
        'demo_link',
        'github_link'
    ];
    protected $casts = [
        'technologies' => 'array',
    ];
}
