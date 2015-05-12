<?php

namespace Blog\App\Models\Blog;

/**
* Base Model
*/

class Base
{
    public static $dbname = 'blog';

	public static $db = null;

    protected static function getDb()
    {
        if (self::$db === null) {
            self::$db = \Madphp\Src\Core\Db::connection(self::$dbname);
            self::$db->setFetchStyle(\PDO::FETCH_CLASS);
        }
		return self::$db;
    }

}