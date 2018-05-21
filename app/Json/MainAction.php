<?php
namespace App\Json;
use App\Json\UserJson;
use App\Json\GameJson;
use App\Models\ActionType;
use App\Models\BaseRequest;
use Log;
class MainAction{
	public static function BuildJsonWeb($controller,$request,$requestJson){
		Log::debug($requestJson);
        $data=json_decode($requestJson,true);
		$baseResult=new BaseRequest($data);
		//dd($baseResult);
		$actionNum=$baseResult->getActionType();
		$returnJson="";
		switch ($actionNum) {
			case ActionType::$LOGIN:
				$returnJson=UserJson::Login($baseResult);
				break;
			case ActionType::$USER_GET:
				$returnJson=UserJson::Get($baseResult);
				break;
			case ActionType::$GAME_SEARCH:
				$returnJson=GameJson::Search($baseResult);
				break;
			default:
				break;
		}
		return $returnJson;
	}
}