<?php

/**
* Article Model
*/

use \Michelf\MarkdownExtra;

class Article extends BaseModel
{
    public $timestamps = false;

    /**
     * 访问器：文章内容（HTML 格式）
     * @return string
     */
    public function getContentAttribute($v)
    {
        switch ($this->attributes['content_format']) {
            case 'markdown':
                return MarkdownExtra::defaultTransform($v);
            case 'html':
                return $v;
        }
    }
}