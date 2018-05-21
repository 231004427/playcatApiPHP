<?php
namespace App\Service;
use App\Models\Token;
use Exception;
use DB;
use App\Service\UserServicelmpl;
use Redis;
/**
* 
*/
class TokenServicelmpl{
    public static function get($user_id) {
    	$data = DB::table('token')
                            ->where([
                                ['user_id', '=', $user_id],
                        	])
                            ->orderByRaw('create_time DESC')
                            ->first();
        return $data;
    }
    //$users = DB::table('users')->skip(10)->take(5)->get();
    public static function getStr($user_id) {

        $key=$user_id;
        $value = Redis::get($key);
        return  $value;

        // if($value){
        //     $data = DB::table('token')
        //     ->select('token_data')
        //     ->where('user_id', $user_id)
        //     ->orderByRaw('create_time DESC')
        //     ->first();
        //     if($data){
        //         Redis::set($key, $data->token_data);
        //         return $data->token_data;
        //     }else{
        //         return null;
        //     }
        // }else{
        //     return $value;
        // }


    }
    public static function clearToken($user_id){
        //清理缓存
        return $user_id;
    }
    public static function insert($token) {

        	$id = DB::table('token')->insertGetId([
                'user_id' => $token->user_id,
                'token_data' => $token->token_data,
                'expire_time' => $token->expire_time,
                'create_time' => $token->create_time,
            ]);
            Redis::setex($token->user_id, 86400, $token->token_data);
            return $id;
    }
    public static function delete($user_id) {
    	DB::table('token')->where('user_id', $user_id)->delete();
        Redis::del($user_id);
    }
}