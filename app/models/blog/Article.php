<?php

namespace Blog\App\Models\Blog;
use \Michelf\MarkdownExtra;

/**
* Article Model
*/

class Article extends Base
{
    const table = 'blog_articles';
    
    public static $defaultSqlMap = array('table' => self::table);
    
    public static function M()
    {
        return new self();
    }

    public static function lists()
    {
    	return self::getDb()->fetchAll(SqlMap\Article::getList, self::$defaultSqlMap);
    }
    
    public static function get($param)
    {
        $data = self::getDb()->fetchOne(SqlMap\Article::getOne, self::$defaultSqlMap, $param);
        
        if ($data) {
            if ($data->content_format == 'markdown') {
                $data->content = MarkdownExtra::defaultTransform($data->content);
            }
        }
        
        return $data;
    }
}