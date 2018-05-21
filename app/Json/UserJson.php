<?php
namespace App\Json;
use App\Common\TokenHelp;
use App\Json\BaseJson;
use App\Models\ActionType;
use App\Models\User;
use App\Service\UserServicelmpl;
use App\Service\TokenServicelmpl;
use Exception;
use DB;
/**
* 
*/
class UserJson extends BaseJson
{
	public static function Login($baseRequest){
		$user=new User(json_decode($baseRequest->getData(),true));
        $user=UserServiceImpl::login($user);
        if($user){
            DB::beginTransaction();
            try{
                $token=TokenHelp::getObj($user->id);
                TokenServicelmpl::delete($token->user_id);
                $id=TokenServicelmpl::insert($token);
                UserServiceImpl::updateToken($user->id,$token->token_data);
                $user->token=$token->token_data;
                DB::commit();
            	return json_encode(MessageHelp::BuildBaseResult(0,'',ActionType::$LOGIN,'登录成功',json_encode($user)));
            }
            catch (Exception $e){
                DB::rollback();//事务回滚
                throw new $e;
                
            }
        }else{
            return json_encode(MessageHelp::BuildBaseResult(3,
                    "账号或密码错误",ActionType::$LOGIN,""));
        }

	}
    public static function Get($baseRequest){
        $user=new User(json_decode($baseRequest->getData(),true));
        $user=UserServiceImpl::getUser($user);
        if($user) {
            return json_encode(MessageHelp::BuildBaseResult(0,'',ActionType::$USER_GET,'获取成功',json_encode($user)));
        }else{
            return json_encode(MessageHelp::BuildBaseResult(1,'用户不存在',ActionType::$USER_GET,''));
        }

    }
}