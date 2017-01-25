<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    //

    function index()
    {
        return view('questionnaire/index');
    }
}
