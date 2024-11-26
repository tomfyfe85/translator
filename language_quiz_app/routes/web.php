<?php

use App\Http\Controllers\QuestionController;

Route::get('/questions', [QuestionController::class, 'all_questions']);

Route::get("/questions/{id}",[QuestionController::class, 'get_question_by_number']);

Route::post("/questions", [QuestionController::class, 'submit_answer']);