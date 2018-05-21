<?php
namespace App\Common;
use App\Models\Token;
/**
* 
*/
class TokenHelp
{
	 public static function getObj($id){
        list($usec, $time) = explode(" ", microtime());
        $msec=round($usec*1000);
        $eTime=$time+86400;
        $data=$id."&".$time.$msec;
        $token=new Token();
        $token->user_id=$id;
        $token->token_data=$data;
        $token->create_time=date('Y-m-d h:i:s',$time);
        $token->expire_time=date('Y-m-d h:i:s',$eTime);
        return $token;
    }
}