<?php

namespace Blog\App\Models\Blog;

/**
* Article Model
*/

class Article extends Base
{
    const table = 'blog_articles';
    
    public static $defaultSqlMap = array('table' => self::table);

    public static function lists()
    {
    	return self::getDb()->fetchAll(SqlMap\Article::getList, self::$defaultSqlMap);
    }
}