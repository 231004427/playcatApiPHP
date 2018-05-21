<?php
namespace App\Service;
use App\Models\User;
use Exception;
use DB;
use Log;
class UserServicelmpl{

    public static function getUser($user) {

        $resutlUser=DB::table('user')
        ->where(function ($query) use($user) {
            if(!empty($user->name)){
                $query->orWhere('name','=',$user->name);
            }
            if(!empty($user->phone)){
                $query->orWhere('phone','=',$user->phone);
            }
            if(!empty($user->id)){
                $query->orWhere('id','=',$user->id);
            }
        })->get();
        if($resutlUser) {
            //获取订单数
            //$resutlUser.setOrderNum(orderDao.orderCount(user.getId()));
            //获取收藏数
            // CollectList collect = new CollectList();
            // collect.setUid(user.getId());
            // collect.setStatus(1);
            // collect.setType(1);
            // $resutlUser.setLoveNum(collectDao.searchCount(collect));
            //获取未读消息数
            //resutlUser.setNo_read(friendDao.noReadCount(user.getId()));
            $resutlUser->orderNum=0;
            $resutlUser->loveNum=0;
            $resutlUser->no_read=0;
        }
        return $resutlUser;

    }
	public static function login($user) {
        try
        {
            if(empty($user->getPhone())){
                throw new Exception("User phone or id should not be empty.");
            }
            if(empty($user->getPassword())){
                if(user.getId()==0){
                throw new Exception("User password or id should not be empty.");
                }
            }
            //用户登录
            $data = DB::table('user')
                            ->where([
                                ['phone', '=', $user->getPhone()],
                                ['password', '=', strtoupper($user->getPassword())],
                                ['status', '=', 1],
                        ])->first();

            // $user=new User();
            // $user->setId(1);
            // $user->setName("哈哈},&%^$$#$@$");
            // $user->setPhone("13588045452");
            // $user->setCreate("2018-12-01 12:00");
            // $user->setToken("123123");
            if(!empty($data)){
                $data->no_read = 0;
            }
            return $data;
        }catch(Exception $e){
            return null;
        }
    }
    public static function updateToken($id,$token) {
        //清理缓存
        DB::table('user')
        ->where('id',$id)
        ->update(['token' => $token]);
    }
}