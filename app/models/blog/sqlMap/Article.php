<?php

namespace Blog\App\Models\Blog\SqlMap;

/**
* Article sql
*/

class Article
{
    const getList = 'select * from #table#';
    
    const getOne = 'select * from #table# where slug=:slug';
}