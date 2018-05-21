<?php
namespace App\Models;
class Game
{
	public $id;
    public $name;
    public $note;
    public $note2;
    public $type;
    public $ico;
    public $img;
    public $img_big;
    public $online_num;
    public $player_num;
    public $version;
    public $down;
    public $create_time;
    public $status;
    public $ok_num;
    public $isgood;
    public $sort_num;
    public $collect;
    public $rule;
    function __construct(array $attributes = [])
	{
		if(empty($attributes)){return;}
        if(isset($attributes['id'])&&!is_null($attributes['id']))
        {
            $this->id=$attributes['id'];
        }
        if(isset($attributes['name'])&&!is_null($attributes['name']))
        {
            $this->name=$attributes['name'];
        }
        if(isset($attributes['note'])&&!is_null($attributes['note']))
        {
            $this->note=$attributes['note'];
        }
        if(isset($attributes['note2'])&&!is_null($attributes['note2']))
        {
           $this->note2=$attributes['note2'];
        }
        if(isset($attributes['type'])&&!is_null($attributes['type']))
        {
            $this->type=$attributes['type'];
        }
        if(isset($attributes['ico'])&&!is_null($attributes['ico']))
        {
            $this->ico=$attributes['ico'];
        }
        if(isset($attributes['img'])&&!is_null($attributes['img']))
        {
            $this->img=$attributes['img'];
        }
        if(isset($attributes['img_big'])&&!is_null($attributes['img_big']))
        {
            $this->img_big=$attributes['img_big'];
        }
        if(isset($attributes['online_num'])&&!is_null($attributes['online_num']))
        {
            $this->online_num=$attributes['online_num'];
        }
        if(isset($attributes['player_num'])&&!is_null($attributes['player_num']))
        {
            $this->player_num=$attributes['player_num'];
        }
                if(isset($attributes['version'])&&!is_null($attributes['version']))
        {
            $this->version=$attributes['version'];
        }
                if(isset($attributes['down'])&&!is_null($attributes['down']))
        {
            $this->down=$attributes['down'];
        }
                if(isset($attributes['create_time'])&&!is_null($attributes['create_time']))
        {
            $this->create_time=$attributes['create_time'];
        }
                if(isset($attributes['status'])&&!is_null($attributes['status']))
        {
            $this->status=$attributes['status'];
        }
                if(isset($attributes['ok_num'])&&!is_null($attributes['ok_num']))
        {
            $this->ok_num=$attributes['ok_num'];
        }
                if(isset($attributes['isgood'])&&!is_null($attributes['isgood']))
        {
            $this->isgood=$attributes['isgood'];
        }
                if(isset($attributes['sort_num'])&&!is_null($attributes['sort_num']))
        {
            $this->sort_num=$attributes['sort_num'];
        }
        if(isset($attributes['collect'])&&!is_null($attributes['collect']))
        {
            $this->collect=$attributes['collect'];
        }
        if(isset($attributes['rule'])&&!is_null($attributes['rule']))
        {
            $this->rule=$attributes['rule'];
        }
	}
}