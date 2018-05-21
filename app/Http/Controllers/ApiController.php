<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BaseResult;
use App\Models\BaseRequest;
use App\Models\ActionType;
use App\Json\MainAction;
use App\Models\User;
use Exception;
class ApiController extends Controller
{
    //
    public function Index(Request $request){

        //throw new Exception("Error Processing Request", 1001);


     //  echo $testJson;
        //echo $request->getContent();
        $result=MainAction::BuildJsonWeb($this,$request,$request->getContent());
        echo $result;
        // $baseResult=new BaseResult(json_decode($result,true));
        // $user=new User(json_decode($baseResult->getData(),true));
        
    }
}
