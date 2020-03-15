<?php


// Общие данные
$site = 'https://tass.ru/rasprostranenie-koronavirusa-novogo-tipa';
$protocol = 'https:';
$html = file_get_contents($site);

// Документ phpQuery
$doc = phpQuery::newDocument($html);

// Главные новости
$newsItems = $doc->find('.themeCardWrap_wrap__2XdJC');

// Перебираем новости, вытаскиваем заголовки и ссылки
$news = array();
foreach ($newsItems as $newsItem) {
    // Находим нужный элемент
    $newsElem = pq($newsItem)->find('a');
    
    // $newsElemSpan = pq($newsItem)->find('a span');
    $newsElemTime = pq($newsItem)->find('.metaTag_meta__IZNP3');
    // $newsElemPostMeta = pq($newsItem)->find('.post-meta');
    $newsElemTitle = pq($newsItem)->find('.text_size-40pt__2s5HC');
    $newsElemSubTitle = pq($newsItem)->find('.text_size-23pt__3EvD_');
    
    // Вытаскиваем атрибуты
    $title = $newsElemTitle->text();
    $time = $newsElemTime->text();
    $link = $newsElem->attr('href');
    $subTitle = $newsElemSubTitle->text();
    // echo $postMeta = $newsElemPostMeta->text();
    // Добавляем url сайта при необходимости
    if (strpos($link, $site) === false) {
        $link = "https://tass.ru". $link;
    }
    
    // Сохраняем результаты в массив
    array_push($news, array(
        'title' => $title,
        'link' => $link,
        'time' => $time,
        'subTitle' => $subTitle
        
    ));
    
}

?>