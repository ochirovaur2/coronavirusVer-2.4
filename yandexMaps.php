<?php 
$file = file_get_contents('./yandex/data.json');     // Открыть файл data.json
$russiaArray = file_get_contents('./yandex/russia.html'); 

$doc = phpQuery::newDocument($russiaArray);

// Главные новости
$russiaArray2 = $doc->find('.tableRussia tr');

// Перебираем новости, вытаскиваем заголовки и ссылки
$items = array();
foreach ($russiaArray2 as $newItem) {
   
    // Находим нужный элемент
    $region = pq($newItem)->find('.paragraph__area')->text();
    
    $confirmed = pq($newItem)->find('.paragraph__confirmed')->text();
    
    // Сохраняем результаты в массив
    array_push($items, array(
        'id' => $region,
        'confirmed' => $confirmed
    ));
}





$taskList=json_decode($file,TRUE);   // Декодировать в массив

for($i = 0, $size = count($taskList); $i < $size; ++$i) {
    
    for($g = 0, $size = count($items); $g < $size; ++$g) {
        
        
        if ($taskList['features'][$i]['id'] == $items[$g]['id']) { 
            
            // print_r($taskList['features'][$i]['id']);
            // print_r($items[$g]['id']);
            
            $taskList['features'][$i]['properties']['balloonContentHeader'] = $items[$g]['id']."<br>Количество инфицированных: ".$items[$i]['confirmed']; 
               
        } 
    }
    // print_r($taskList['features'][$i]['id']);
}




file_put_contents('data.json',json_encode($taskList)); // Перекодировать в формат и записать в файл.

unset($taskList);  // Очистить переменную $taskList 

?>