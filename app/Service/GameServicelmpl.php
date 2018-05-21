<?php
namespace App\Service;
use App\Models\Game;
use Exception;
use DB;
use Log;
class GameServicelmpl{
	public static function searchCount($isgood,$type){
        $resut=DB::table('game')
        ->when($isgood, function ($query) use ($isgood) {
                        return $query->where('isgood','=',$isgood);
                    })
        ->when($type, function ($query) use ($type) {
                        return $query->where('type','=',$type);
                    })
        ->count();
        if($resut){
        	return $resut;
        }else{
        	return 0;
        }
	}
	public static function search($start,$pageNum,$isgood,$type){
		$list = DB::table('game')
        ->select('id','name','note','ico','img','img_big','player_num')
        ->when($isgood, function ($query) use ($isgood) {
                        return $query->where('isgood','=',$isgood);
                    })
        ->when($type, function ($query) use ($type) {
                        return $query->where('type','=',$type);
                    })
        ->offset($start)
        ->limit($pageNum)
        ->get();
        return $list;
	}
}