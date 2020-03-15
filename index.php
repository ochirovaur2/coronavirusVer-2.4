<?php

include './phpQuery.php';
include './news.php';
include './yandexMaps.php';


?>
    
  


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Статистика коронавируса онлайн">
    <meta name="keywords" content="коронавирус, covid-2019, вирус, вирусы">
    <meta http-equiv="content-language" content="ru">
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link rel="stylesheet" href="css/style.bundle.css" />
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap" rel="stylesheet" />
    <!-- /Google fonts -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=<a0664843-9df1-4059-b76e-b05ba5c2e17a>" type="text/javascript"></script>
    <script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
    <script src="./yandex/object_manager.js" type="text/javascript"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(60691441, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        trackHash:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/60691441" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <title>Статистика коронавируса | COVID-2019</title>
    <style>
        #map {
            width: 95vw; height: 45vh; padding: ; margin: 2.5rem auto;
        }
        
    </style>
  </head>
  <body>
    <!-- Header -->
    <div class="header">
      
      <div class="container">
        <a href="#" class="logo">
          <img src="./img/logos/bacteria2.svg" alt="logo" class="logo__img" />
          <div class="logo__text-box">
            <p class="logo__text_up">Статистика</p>
            <p class="logo__text_down">по COVID-2019</p>
          </div>
        </a>

        <nav class="nav" id="nav">
          <ul class="nav__list">
            <li class="nav__item"><a href="#yak1" class="nav__link">Россия</a></li>
            <li class="nav__item"><a href="#yak2" class="nav__link">Китай</a></li>
            <li class="nav__item"><a href="#yak3" class="nav__link">Мир</a></li>
            <li class="nav__item"><a href="#yak4" class="nav__link">Новости</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- /Header -->

    <!-- /Header -->

    <main class="main">
      <!-- Main sammary -->

      <section class="summaryWorld section" >
        <h2 class="heading-secondary u-center-text time">Ситуация в мире</h2>

        <div class="container summaryWorld__container" id="summaryWorld">
          <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
          </svg>
        </div>
        <p class="paragraph u-center-text paragraph__update">Данные обновляются... Пожалуйста, подождите</p>
      </section>
      
      <!--  Russia -->

      <section class="summaryRussia section " id="yak1"> 
        <h2 class="heading-secondary u-center-text">Ситуация в России</h2>
        <p class="paragraph my-b-normal u-center-text paragraph__table">Данные обновлены: 15 марта 2020, 07:00:00 </p>
        <div class="container summaryRussia__container" id="summaryRussia">
          
        </div>
        
          <h2 class="heading-secondary u-center-text">Карта заражений в России</h2>    
          <div id="map"></div>
        
        <div class="container">
          <table class="table">
            <thead>
              <tr>
                <th class="table__headerElem heading-tertiary">Область</th>
                <th class="table__headerElem heading-tertiary">Заражено</th>
                <th class="table__headerElem heading-tertiary">Умерло</th>
                <th class="table__headerElem heading-tertiary">Выздоровело</th>
              </tr>
            </thead>
            <tbody class="tableRussia">
                <tr>
                    <td>Забайкальский край </td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                                        <tr>
                    <td>Тюменская область</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                                        <tr>
                    <td>Казань</td>
                    <td>3</td>
                    <td>0</td>
                    <td>3</td>
                </tr>
                                        <tr>
                    <td>Москва</td>
                    <td>34</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                                        <tr>
                    <td>Санкт-Петербург</td>
                    <td>6</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                                        <tr>
                    <td>Нижний Новгород</td>
                    <td>1</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                                        <tr>
                    <td>Липецк</td>
                    <td>3</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                                        <tr>
                    <td>Белгородская область</td>
                    <td>1</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                                        <tr>
                    <td>Калининградская область</td>
                    <td>3</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                                        <tr>
                    <td>Московская область</td>
                    <td>5</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                                        <tr>
                    <td>Краснодарский край</td>
                    <td>1</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                                        <tr>
                    <td>Ленинградская область</td>
                    <td>1</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                                        <tr>
                    <td>Пермский край</td>
                    <td>1</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                                        <tr>
                    <td>Кемеровская область</td>
                    <td>2</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                
            </tbody>
          </table>
        </div>
      </section>
      
      
    
	
      <!-- Summary China -->

      <section class="summaryChina section " id="yak2">
        <h2 class="heading-secondary u-center-text time">Ситуация в Китае</h2>
        <div class="container summaryChina__container" id="summaryChina">
          <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
          </svg>
        </div>
        <p class="paragraph u-center-text paragraph__update">Данные обновляются... Пожалуйста, подождите</p>
        <div class="container">
          <div class="img">
            <img src="./img/china.jpg" alt="China" class="img__img" />
          </div>
        </div>
      </section>

      <!-- inside China -->

      <section class="section">
        <div class="container">
          <table class="table">
            <thead>
              <tr class="china__header">
                <th class="table__headerElem heading-tertiary">Область</th>
                <th class="table__headerElem heading-tertiary">Новые</th>
                <th class="table__headerElem heading-tertiary">Заражено</th>
                <th class="table__headerElem heading-tertiary">Умерло</th>
                <th class="table__headerElem heading-tertiary">Выздоровело</th>
              </tr>
            </thead>

            <tbody id="chinaTable"></tbody>
          </table>
        </div>
      </section>

      

      <!-- summary Outside -->

      <section class="summaryOutside section" id="yak3">
        <h2 class="heading-secondary u-center-text time">Ситуация вне Китая</h2>
        <div class="container summaryOutside__container" id="summaryOutside">
          <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
          </svg>
        </div>
        <p class="paragraph u-center-text paragraph__update">Данные обновляются... Пожалуйста, подождите</p>
        <div class="container">
          <div class="img">
            <img src="./img/world.jpg" alt="China" class="img__img" />
          </div>
        </div>
      </section>

      <!-- outside China -->

      <section class="section">
        <div class="container">
          <table class="table">
            <thead>
              <tr class="outside__header">
                <th class="table__headerElem heading-tertiary">Страна</th>
                <th class="table__headerElem heading-tertiary">Новые</th>
                <th class="table__headerElem heading-tertiary">Заражено</th>
                <th class="table__headerElem heading-tertiary">Умерло</th>
                <th class="table__headerElem heading-tertiary">Выздоровело</th>
              </tr>
            </thead>
            <tbody id="outsideTable"></tbody>
          </table>
        </div>
      </section>
      
      
      <!-- News -->
    	<section class="section" id="yak4">
    		<h2 class="heading-secondary u-center-text my-b-normal">Последние новости</h2>
    		<div class="container">
    			<ul class="news">
    				<?php
                        foreach ($news as $item) {
                        ?>
                        <li>
                            <a href="<?php echo $item['link']; ?>" target="_blank"><?php echo $item['title'];   ?><br><span class="paragraph__died"> <?php echo $item['subTitle'].'</span> <span class="paragraph__icu"> '.$item['time'];   ?></span></a>
                        </li>
                        <?php
                        }
                        ?>
    			</ul>
    		</div>
    	</section>
    </main>
    
    
    
    
	
	

    <footer class="footer">
      <div class="container main-footer">
        <p class="paragraph paragraph__footer">Ochirov Aiur 2020 <a href="version.html" class="footer__site-version">Ver. 2.4</a></p>
        <div class="social">
          <a href="https://www.instagram.com/aiur95_/"><i class="fab fa-instagram"></i></a>
          <a href="https://vk.com/aiurochirov"><i class="fab fa-vk"></i></a>
          <a href="https://www.youtube.com/channel/UCC8Lh0LZ53XzQjYTfUwGRkg"><i class="fab fa-youtube"></i></a>
          <a href="http://bsu.ru/"><div class="footer__bsu-span"><p class="footer__logo">БГУ</p></div></a>

        </div>
      </div>
      <div class="container footer__second">
        <div class="metrika">
            <!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=60691441&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/60691441/2_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:80px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(60691441, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/60691441" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
        </div>
        <div>
            <p>Источники:</p>
            <a href="https://tass.ru" class="footer__site-version">Тасс</a>
            <a href="https://www.baidu.com/" class="footer__site-version">Baidu</a>
        </div>
        
      </div>
      
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    
    <script src="js/bundle.js"></script>

  </body>
</html>


