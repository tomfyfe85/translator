<?php
namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;


class QuestionController extends Controller
{
    public function all_questions(){
        $all_data = Question::all();
        $all_data = $all_data->toArray();
        $questions = [];
        foreach ($all_data as $question){
            array_push($questions, $question['id'] . " - " . $question["question_text"]);
        };
        return array_reverse($questions);
    }

    public function get_question_by_number($id){
        $question = Question::find($id);
        $text = $question["question_text"];
        return $text;
    }

    public function submit_answer(Request $request){
        $question_number = $request["question"];
        $answer = $request["answer"];
    
        $question = Question::find($question_number);
    
        if($question["answer_text"] == $answer){
            return "True";
        }
        return "False";
    }
}
