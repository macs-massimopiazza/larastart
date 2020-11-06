<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function showList() {
        return Question::all();
    }

    public function getRandom() {
        $randomNumber = rand(1, Question::count());
        return Question::where("id", $randomNumber)->get();
    }

    // public function list() {
    //     return Question::get();
    // }
    // public function show($id) {
    //     $question = Question::find($id);
    //     if ($question != null) {
    //         return response($question, 200);
    //     }
    //     return response("bagolone non c'è la domanda, errorino", 404);

    // }
    // public function add($domanda) {
    //     $newQuestion = new Question; 
    //     $newQuestion->question = $domanda;
    //     $newQuestion->save();
    //     return "ok tuttappost domanda - " . $domanda . " - creata";
    // }
}