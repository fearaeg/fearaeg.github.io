<html lang="en">
    <head>
        <meta charset="UTF=8">
        <link rel="stylesheet" href="adds/main.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
        <title> Главное меню </title>
    </head>
    <body>
       <header class="header">
           <div class="container">
                <div class="header_inner">
                   <div class="header_lg">
                        <nav>
                        <a class="nav_lk" href="index.html"> Главное меню </a>
                        <a class="nav_lk" href="other%20lists/list8.html"> Национальные парки </a>
                        </nav>
                    </div>
                    <div class="header_lg">
                        <nav>
                        <a class="nav_lk" href="other%20lists/list9.html"> Изображения </a>
                        <a class="nav_lk" href="other%20lists/list10.html"> Контакты </a> 
                        </nav>
                    </div>
                 </div>
           </div>
       </header>
        <div class="middle">
            <div class="container">
                <div class="middle_inner">
                    <p class="middle_text"> Национальные парки - это обширные участки территории, в которые входят различные искусственно созданные или окультуренные охраняемые антропогенные ландшафты, отличительной особенностью которых являются природные достопримечательности и высокая эстетичность. Задачами парков являются сохранение природных экосистем, природного генофонда животных и растений, объектов культурного наследия и поддержание экологического разнообразия природной среды. Национальные парки зачастую также являются туристической территорией. Красота пейзажей и природы самых популярных из них собирают миллионов посетителей со всего мира. На этом сайте описаны несколько национальных парков, а также их главные достопримечательности. </p>
                    <a class="btn" href="other%20lists/list8.html"> 
                    <?php
                        if (isset($_COOKIE["signup_error"]))
			{
                        echo '<p>Пользователь с данным логином/почтой уже существует<id=""></p>'
                        }
                    ?>
                    </a>
                </div>
            </div>
        </div> 
    </body>
</html>
