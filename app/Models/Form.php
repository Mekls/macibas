<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    public function students() {
        return $this->belongsToMany(User::class, 'form_user');
    }
    public function lessons() {   
        return $this->hasMany(Lesson::class);
    }
}
