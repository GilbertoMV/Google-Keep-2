<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content','is_archived', 'is_pinned'];

    protected $attributes = [
        'is_archived' => false,
        'is_pinned' => false,
    ];
}
