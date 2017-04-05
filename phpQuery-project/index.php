<?php

require "../../exfriend/phpQuery-master/src/phpQuery.php";

$html = file_get_contents('http://pogoda.yandex.ru');

//var_dump($html);

    phpQuery::newDocument($html);

$title = pq('title')->html();
$title_1 = pq('.title_level_1')->html();
$current_weather = pq('.current-weather')->html();




var_dump($title);
var_dump($title_1);
var_dump($current_weather);





phpQuery::unloadDocuments();




?>


