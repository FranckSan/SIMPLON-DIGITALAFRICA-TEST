<?php

namespace App\Models;

use App\Models\Sujet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function sujets()
    {
        return $this->hasMany(Sujet::class);
    }
}
