<?php

use App\Models\Question;

Route::get('/questions', function () {
    $questions = Question::all();
    return json_encode($questions);
});

Route::get("/questions/{id}", function($id){
    $question = Question::find($id);
    $text = $question["question_text"];
    return json_encode($text);
});

Route::post("/questions", function(){
});