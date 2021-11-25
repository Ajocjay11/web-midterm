<?php
namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ElectionSurvey;

class ElectionSurveyPostController extends Controller
{
    public $successStatus = 200;

    public function getAllPosts(Request $request)
    {
        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){
            $lists = DB::table('election_survies')
                        ->leftJoin('users','election_survies.id', '=','users.id')
                        ->select('election_survies.id','election_survies.president','election_survies.senator','election_survies.mayor','election_survies.congressman','election_survies.barangay_captain','users.name','election_survies.created_at','election_survies.updated_at')
                        ->get();

            return response()->json($lists,$this->successStatus);
        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }


    public function getPost(Request $request)
    {

        $id = $request['pid']; //old post id

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $lists = ElectionSurvey::where('id',$id)->first();
            if($user != null){
                return response()->json($lists,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }


    // this method searches the country
    public function searchPost(Request $request)
    {

        $params = $request['p']; //p = params

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $lists = ElectionSurvey::where('president','LIKE','%' .$params . '%')->GET();
            if($user != null){
                return response()->json($lists,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }
}
