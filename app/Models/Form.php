<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function users() {
        return $this->hasMany(User::class);
    }
    public function lessons() {   
        return $this->hasMany(Lesson::class);
    }
}
