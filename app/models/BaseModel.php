<?php

/**
* Base Model
*/

class BaseModel extends Eloquent
{
    /**
    * 随机获取记录，不依靠主键
    * @param int $num 获取记录数量，默认为 1 条
    * @return array
    */
    public static function random($num = 1)
    {
        $results = array();
        // 取记录数量
        $sum = self::count();
        // 随机出记录位置
        $offsets = random_nums(0, $sum - 1, $num);
        // 循环取出多条记录
        foreach ($offsets as $offset) {
            $o = self::skip($offset);
            $results[] = $o->first();
        }
        return $results;
    }
}