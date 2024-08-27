<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public function form() {
        return $this->belongsTo(Form::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subject() {
        return $this->belongsTo(Subject::class);
    }
}
