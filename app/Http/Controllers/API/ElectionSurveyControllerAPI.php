<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\ElectionSurvey;

class ElectionSurveyControllerAPI extends Controller
{
    public function index(){
        $survey = ElectionSurvey::all();

        return response()->json(['survey'=>$survey],200);
    }
}
