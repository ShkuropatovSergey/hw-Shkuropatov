<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?
    require_once "require\hi.php";
    require_once "require\header.php";
    ?>

    <main>
        <div class="box">
            <div class="name1">
                <h2>Шкуропатов Сергей</h2>
            </div>
            <div class="container">
                <div class="photo"></div>
                <div class="information">
                    <div class="name2">
                        <h2>Шкуропатов Сергей</h2>
                    </div>
                    <div class="about_me">
                        <div class="study">
                            <p>
                                <?
                                require_once "require\about_me.php";
                                ?>
                                <!-- Я закончил химико-технологический
                                институт по специальности "Технология
                                неорганических веществ". Работаю сейчас по
                                специальности на химическом заводе.
                                Недавно закончил курсы web-разработки в
                                Скандинавской школе.Там в основном уклон
                                был на фронтенд.Сейчас хотел бы еще
                                битрикс освоить. -->
                            </p>
                        </div>
                        <div class="offer">
                            <p>
                               <?
                                require_once "require\offer.php";
                                ?> 
                                <!-- На занятиях все отлично! -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- любимые фильмы на flex -->
        <div class="box_big_flex">
            <div class="box_border">
                <div class="box_middle">
                    <h2>Любимые фильмы</h2>
                    <div class="box_small">
                        <div class="item1">
                            <div class="content">
                                <div class="img"></div>
                                <div class="text">
                                    <p>
                                        Джерард Батлер вновь появился в новом
                                        экшен-боевике Жана-Франсуа Рише «Крушение»,
                                        чтобы поклонники смогли насладиться
                                        еще одним непредсказуемым сюжетом и
                                        динамичным экшеном. Джерард Батлер
                                        выполнил потрясающую работу, чтобы
                                        привлечь внимание зрителей и заставить
                                        их почувствовать себя частью сюжета.
                                        Это один из тех фильмов, который не
                                        стоит пропускать!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item2">
                            <div class="content">
                                <div class="img"></div>
                                <div class="text">
                                    <p>
                                        Мамочки» — это комедия о трёх
                                        подругах и о том, как резко
                                        меняется жизнь после тридцати,
                                        когда на смену ночным вечеринкам
                                        приходят подгузники.
                                        Аня — новоиспечённая мама десятимесячного
                                        сына, которая только начинает сталкиваться
                                        с проблемами материнства и супружеской
                                        жизни. Иногда кажется, что если бы не
                                        советы подруг, она бы сошла с ума от
                                        беспомощности.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_middle">
                    <h2>Любимые фильмы</h2>
                    <div class="box_small">
                        <div class="item3">
                            <div class="content">
                                <div class="img"></div>
                                <div class="text">
                                    Четыре пожилые подруги, участвующие в
                                    книжном клубе, прочитывают эротический
                                    бестселлер «50 оттенков серого».
                                    После этого в жизни почтенных дам
                                    происходит локальная сексуальная
                                    революция. Романтическую комедию о
                                    любви без возраста «Книжный клуб»
                                    снял режиссер-дебютант Билл Холдермэн.
                                    Квартет замечательных актрис «старой
                                    гвардии» представляют Джейн Фонда,
                                    Дайан Китон, Мэри Стинберген.
                                </div>
                            </div>
                        </div>
                        <div class="item4">
                            <div class="content">
                                <div class="img"></div>
                                <div class="text">
                                    <p>
                                        Создатели «Мальчишника в Вегасе» поведают
                                        историю молодой мамы Эми, изнуренной
                                        своими каждодневными обязанностями и
                                        иллюзорно «идеальной» жизнью.
                                        Эми (Мила Кунис) тянет на себе работу,
                                        домашнее хозяйство, детей, собаку и
                                        мужа – чемпиона по лежанию на диване.
                                        Она пытается быть идеальной, да только
                                        в этой гонке у нее совсем не остается
                                        времени на себя.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- любимые фильмы на grid -->
        <div class="box_border">
            <div class="container_grid">
                <div class="box_big">
                    <div class="box_small">
                        <h2>Любимые фильмы</h2>
                        <div class="item_grid1">
                            <div class="img"></div>
                            <div class="text">
                                <p>
                                    Джерард Батлер вновь появился в новом
                                    экшен-боевике Жана-Франсуа Рише «Крушение»,
                                    чтобы поклонники смогли насладиться
                                    еще одним непредсказуемым сюжетом и
                                    динамичным экшеном. Джерард Батлер
                                    выполнил потрясающую работу, чтобы
                                    привлечь внимание зрителей и заставить
                                    их почувствовать себя частью сюжета.
                                    Это один из тех фильмов, который не
                                    стоит пропускать!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box_small">
                        <div class="item_grid2">
                            <div class="img"></div>
                            <div class="text">
                                <p>
                                    Мамочки» — это комедия о трёх
                                    подругах и о том, как резко
                                    меняется жизнь после тридцати,
                                    когда на смену ночным вечеринкам
                                    приходят подгузники.
                                    Cоветы подруг, она бы сошла с ума
                                    Аня — новоиспечённая мама десятимесячного
                                    сына, которая только начинает сталкиваться
                                    с проблемами материнства и супружеской
                                    жизни. Иногда кажется, что если бы не
                                    советы подруг, она бы сошла с ума от
                                    беспомощности.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_big">
                    <div class="box_small">
                        <h2>Любимые фильмы</h2>
                        <div class="item_grid3">
                            <div class="img"></div>
                            <div class="text">
                                <p>
                                    Создатели «Мальчишника в Вегасе» поведают
                                    историю молодой мамы Эми, изнуренной
                                    своими каждодневными обязанностями и
                                    иллюзорно «идеальной» жизнью.
                                    Эми (Мила Кунис) тянет на себе работу,
                                    домашнее хозяйство, детей, собаку и
                                    мужа – чемпиона по лежанию на диване.
                                    Она пытается быть идеальной, да только
                                    в этой гонке у нее совсем не остается
                                    времени на себя.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box_small">
                        <div class="item_grid4">
                            <div class="img"></div>
                            <div class="text">
                                <p>
                                    Четыре пожилые подруги, участвующие в
                                    книжном клубе, прочитывают эротический
                                    бестселлер «50 оттенков серого».
                                    После этого в жизни почтенных дам
                                    происходит локальная сексуальная
                                    революция. Романтическую комедию о
                                    любви без возраста «Книжный клуб»
                                    снял режиссер-дебютант Билл Холдермэн.
                                    Квартет замечательных актрис «старой
                                    гвардии» представляют Джейн Фонда,
                                    Дайан Китон, Мэри Стинберген.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- </div> -->
    <footer>

    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>


<?php
   require_once('simple_html_dom.php');
    $html = file_get_html('index.php');
    $str= $html->plaintext;
    echo '<br>';echo '<br>';
    //$about_me и $offer - строки из about_me.php и offer.php
$string=$about_me.' '.$offer.' '.$str;
echo  "Количество слов на сайте:".
count(str_word_count($string, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя"));
echo '<br>';

//Количество гласных букв
$offer_letters=strip_tags($offer);
$about_me_letters=strip_tags($about_me);
$str_letters=strip_tags($str);
$vowel_letters=$about_me_letters.$offer_letters.$str_letters;
echo '<br>';
    preg_match_all('/[aeiouаоуыэеёиюяАОУЫЭЕЁИЮЯ]/i', $vowel_letters, $matches);
    echo "Количество глассных букв: ".count($matches[0]);
    echo '<br>';echo '<br>';
//Разница дат
    $datetime1 = date_create('2016-06-01');
    $datetime2 = date_create('2018-09-21');
   
    $interval = date_diff($datetime1, $datetime2);

    echo "Разница между датами 2018-09-21 и 2016-06-01: ".
    $interval->format('%a дней'); 
?>
</body>
</body>

</html>