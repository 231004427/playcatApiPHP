<?php
namespace App\Models;
/**
* 
*/
class Token
{
	public $id;
    public $user_id;
    public $phone;
    public $password;
    public $token_data;
    public $expire_time;
    public $create_time;
	
	function __construct(array $attributes = [])
	{
		if(empty($attributes)){return;}
        if(isset($attributes['id'])&&!is_null($attributes['id']))
        {
            $this->id=$attributes['id'];
        }
        if(isset($attributes['user_id'])&&!is_null($attributes['user_id']))
        {
            $this->user_id=$attributes['user_id'];
        }
        if(isset($attributes['phone'])&&!is_null($attributes['phone']))
        {
            $this->phone=$attributes['phone'];
        }
        if(isset($attributes['password'])&&!is_null($attributes['password']))
        {
           $this->password=$attributes['password'];
        }
        if(isset($attributes['token_data'])&&!is_null($attributes['token_data']))
        {
            $this->token_data=$attributes['token_data'];
        }
        if(isset($attributes['expire_time'])&&!is_null($attributes['expire_time']))
        {
            $this->expire_time=$attributes['expire_time'];
        }
        if(isset($attributes['create_time'])&&!is_null($attributes['create_time']))
        {
            $this->create_time=$attributes['create_time'];
        }
	}
}