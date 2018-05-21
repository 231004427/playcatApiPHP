<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BaseResult;
use App\Models\BaseRequest;
use App\Models\ActionType;
use App\Json\MainAction;
use App\Models\GameList;
use Exception;
class TestController extends Controller
{
    public function Index(Request $request){
     //    $user=new User();
     //    $user->setPhone("13588045452");
     //    $user->setPassword("E10ADC3949BA59ABBE56E057F20F883E");

    	// $baseRequest=new BaseRequest();
    	// $baseRequest->setUserid(-1);
     //    $baseRequest->setToken("123123");
    	// $baseRequest->setDateTime(date('Y-m-d h:i:s'));
     //    $baseRequest->setActionType(ActionType::$LOGIN);
     //    $baseRequest->setData(json_encode($user));
     //    $testJson=json_encode($baseRequest,false);
    	$obj=new GameList();
    	$obj->count=0;
    	$obj->isGood=0;
    	$obj->type=2;
    	$obj->start=0;
    	$obj->pageNum=5;
    	$obj->games=[];

    	$baseRequest=new BaseRequest();
    	$baseRequest->setUserid(-1);
        $baseRequest->setToken("123123");
    	$baseRequest->setDateTime(date('Y-m-d h:i:s'));
        $baseRequest->setActionType(ActionType::$GAME_SEARCH);
        $baseRequest->setData(json_encode($obj));
        $baseRequest->setVesion('1.0');

        $testJson=json_encode($baseRequest,false);

        $result=MainAction::BuildJsonWeb($this,$request,$testJson);
        echo $result;
    }
}