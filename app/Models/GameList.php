<?php
namespace App\Models;
class GameList
{
    public $count;
    public $start;
    public $pageNum;
    public $isGood;
    public $type;
    public $games;
    function __construct(array $attributes = [])
	{
		if(empty($attributes)){return;}
        if(isset($attributes['count'])&&!is_null($attributes['count']))
        {
            $this->count=$attributes['count'];
        }
        if(isset($attributes['start'])&&!is_null($attributes['start']))
        {
            $this->start=$attributes['start'];
        }
        if(isset($attributes['pageNum'])&&!is_null($attributes['pageNum']))
        {
            $this->pageNum=$attributes['pageNum'];
        }
        if(isset($attributes['isGood'])&&!is_null($attributes['isGood']))
        {
            $this->isGood=$attributes['isGood'];
        }
        if(isset($attributes['type'])&&!is_null($attributes['type']))
        {
            $this->type=$attributes['type'];
        }
        if(isset($attributes['games'])&&!empty($attributes['games']))
        {
            $this->games=json_decode($attributes['games']);
        }
    }
}