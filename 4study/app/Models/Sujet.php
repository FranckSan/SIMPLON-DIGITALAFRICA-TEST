<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sujet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sub_namme',
        'description',
        'email',
        'statut',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
