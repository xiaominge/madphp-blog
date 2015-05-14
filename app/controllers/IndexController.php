<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 首页控制器
 * @author 徐亚坤 hdyakun@sina.com
 */

class IndexController extends BaseController
{
    public function __construct()
    {
        $this->model = 'article';
        parent::__construct();
    }

    public function index($page = 1)
    {
        $articles = Blog\App\Models\Blog\Article::lists();
        View::make('index')->with('articles', $articles)->show();
    }

    public function show($slug = '')
    {
        $article = Blog\App\Models\Blog\Article::get(array('slug' => $slug));
        View::make('show')->with('article', $article)->show();
    }
    
}