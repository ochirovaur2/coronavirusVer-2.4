<?php


// Общие данные
$site = 'https://plainnews.ru/tag/koronavirus/';
$protocol = 'https:';
$html = file_get_contents($site);

// Документ phpQuery
$doc = phpQuery::newDocument($html);

// Главные новости
$newsItems = $doc->find('.posts-list-item');

// Перебираем новости, вытаскиваем заголовки и ссылки
$news = array();
foreach ($newsItems as $newsItem) {
    // Находим нужный элемент
    $newsElem = pq($newsItem)->find('.post-content a');
    // $newsElemSpan = pq($newsItem)->find('a span');
    $newsElemTime = pq($newsItem)->find('.timestamp');
    $newsElemPostMeta = pq($newsItem)->find('.post-meta');
    
    // Вытаскиваем атрибуты
    $title = $newsElem->text();
    $time = $newsElemTime->text();
    $link = $newsElem->attr('href');
    
    
    if($link == '') {
        break;

    }
    // Сохраняем результаты в массив
    array_push($news, array(
        'title' => $title,
        'link' => $link,
        'time' => $time
    ));
}

?>