<?php
namespace App\Json;
use App\Json\BaseJson;
use App\Models\GameList;
use App\Models\ActionType;
use App\Service\GameServicelmpl;
/**
 * 
 */
class GameJson extends BaseJson
{
	public static function Search($baseRequest){

        $gameList= new GameList(json_decode($baseRequest->getData(),true));
        if($gameList->type==0)
        {
            $gameList->isGood=1;
        }
        $gameList->count=GameServicelmpl::searchCount($gameList->isGood,$gameList->type);
        $gameList->games=GameServicelmpl::search($gameList->start,$gameList->pageNum,$gameList->isGood,$gameList->type);

        return json_encode(MessageHelp::BuildBaseResult(0,'',ActionType::$GAME_SEARCH,'获取数据成功',json_encode($gameList)));
    }
}