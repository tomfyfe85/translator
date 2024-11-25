<?php

use App\Models\Question;
use Illuminate\Http\Request;


Route::get('/questions', function () {
    $questions = Question::all();
    return json_encode($questions);
});

Route::get("/questions/{id}", function($id){
    $question = Question::find($id);
    $text = $question["question_text"];
    return json_encode($text);
});

Route::post("/questions", function(Request $request){
    $question_number = $request["question"];
    $answer = $request["answer"];

    $question = Question::find($question_number);

    if($question["answer_text"] == $answer){
        return "True";
    }
    return "False";

});