<?php

namespace App\Http\Controllers;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function create()
    {
        return view('questionnaire.create');
    }

    public function view()
    {
        $questionnaires = auth()->user()->questionnaires;

        return view('questionnaire.view', compact('questionnaires'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required',
        ]);

        // $data['user_id'] = auth()->user()->id;

        // $questionnaire = \App\Models\Questionnaire::create($data);

        $questionnaire = auth()->user()->questionnaires()->create($data);

        return redirect('/questionnaires/'.$questionnaire->id);
    }

    public function show(\App\Models\Questionnaire $questionnaire)
    {
        $questionnaire->load('questions.answers.responses');

        return view('questionnaire.show', compact('questionnaire'));
    }

    public function destroy(\App\Models\Questionnaire $questionnaire, \App\Models\Question $question)
    {
        $question->answers()->delete();
        $question->delete();
        $questionnaire->delete();

        return redirect('/questionnaires/view');
    }
}
