<?php
namespace App\Json;
use App\Models\BaseResult;
class MessageHelp{
    public static function BuildBaseResult($errNum, $errMsg, $type, $txt,$data=''){
        $result = new BaseResult();
        $result->setErrcode($errNum);
        $result->setErrmsg($errMsg);
        $result->setType($type);
        $result->setText($txt);
        $result->setData($data);
        return $result;
    }
}