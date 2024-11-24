<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ["question_text", "answer_text"];
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;
}
