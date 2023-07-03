<?php
include_once 'newsItem.php';
include_once 'news/news1.php';
include_once 'component/NewsFactory.php';

$newsFactory = new NewsFactory();
$simpleNews = $newsFactory->create("Simple");

echo $simpleNews->build(
        $news1['title'], 
        $news1['subtitle'], 
        $news1['description'],
        $news1['image'],
        $news1['imageDescription'],
        $news1['date']
    );
