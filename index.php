<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    // Задание №1
    echo 'Вывод в столбец чисел от 5 до 13. <br>';
    for ($i = 5; $i <= 13; $i++) {
        echo $i;
        echo '<br>';
    }


    // Задание №2
    echo '<br>';
    $num = 1000;
    $i = 0;
    echo "Начальное число: $num";
    echo '<br>';
    while ($num >= 50) {
        $i++;
        $num = $num / 2;
        echo "Число после деления на 2: $num";
        echo '<br>';
        if ($num <= 50) {
            echo "Оставшееся число - $num";
            echo '<br>';
            echo "Количество итераций - $i";
            echo '<br>';
        }
    }
    echo '<br>';
    $num = 1000;
    echo "Начальное число: $num";
    echo '<br>';
    for ($i = 1; ($num >= 50); $i++) {
        $num = $num / 2;
        echo "Число после деления на 2: $num";
        echo '<br>';
        if ($num <= 50) {
            echo "Оставшееся число - $num";
            echo '<br>';
            echo "Количество итераций - $i";
            echo '<br>';
        }
    }


    // Задание №3
    $str = "";
    echo '<br>';
    for ($i = 0; ($i <= 10); $i++) {
        echo $i . '. Если в переменную $i положено число ' . $i;
        echo '   ';
        for ($j = 0; ($j <= 10 - $i); $j++) {
            if ($j < 10 - $i) {
                $str = $str . "$j" . ',';
            } else if ($j == 10 - $i) {
                $str = $str . "$j";
            }
        }
        echo ",то строка будет равна $str";
        echo '<br>';
        $str = "";
    }
    echo '<br>';
    echo '<br>';


    //Задание №3  
    ?>
    <form action="">
        <label for="num">Введите число:</label>
        <input type="number" id="num" name="num" placeholder="Число от 0 до 10" required="true">
        <button type="submit">Получить строку чисел</button>
    </form>
    <br>
    <?

    @$num = $_GET["num"];
    $i = 10;
    $str = " ";
    $j = 0;
    while ($j <= $i - $num) {
        if ($j <= $i - $num - 1) {
            $str = $str . "$j" . ',';
        } else if ($j == ($i - $num)) {
            $str = $str . "$j";
        }
        $j++;
        echo $str;
        $str = " ";
    }
    echo '<br>';
    echo '<br>';

    // Урок 3-4
    // Слайд 23
    echo "Урок 3-4";
    echo '<br>';
    echo "Слайд 23";
    echo '<br>';

    echo "Задание 1";
    echo '<br>';
    echo '<br>';

    for ($i = 1; $i <= 30; $i++) {
        if ($i % 2 == 0) {
            echo $i;
            echo '<br>';
        }
    }
    echo '<br>';
    echo "Задание 2";
    echo '<br>';
    echo '<br>';

    for ($i = 1; $i <= 50; $i++) {
        if (($i % 3 == 0) and ($i % 5 == 0)) {
            echo "<b>$i</b> -   жирный";
            echo '<br>';
        } else if ($i % 3 == 0) {
            echo "<i>$i</i>  -  курсив";
            echo '<br>';
        } else {
            echo $i;
            echo '<br>';
        }
    }
    echo '<br>';
    echo "Задание 4";
    echo '<br>';
    echo '<br>';
    $n = 1;
    $d = 1;
    $i = 0;
    $s = 0;
    while ($s < 10) {
        $s = $s + $n / $d;
        $i++;
        $n += 3;
        $d += 1;
    }
    echo "Минимальное количество элементов: $i";
    echo '<br>';
    echo "Сумма при сложении $i элементов составит: $s";
    echo '<br>';
    echo '<br>';

    // Урок 3-4
    // Слайд 23
    echo "Урок 3-4";
    echo '<br>';
    echo "Слайд 24";
    echo '<br>';
    echo "Задание 1";
    echo '<br>';
    $num = mt_rand(2, 10);
    echo "Получено случайное число: $num";
    echo '<br>';

    $sum = 0;
    for ($i = 0; $i <= $num; $i++) {
        if ($i % 2 == 0) {
            $sum = $sum + $i;
        }
    }
    echo "Сумма всех четных цифр числа $num равна $sum";
    echo '<br>';

    echo '<br>';
    echo "Задание 2";
    echo '<br>';
    $num = mt_rand(50000, 60000);
    echo "Получено случайное число: $num";
    echo '<br>';
    $str = strval($num);

    for ($i = 0; $i < strlen($num); $i++) {
        for ($b = $i + 1; $b < strlen($num); $b++) {
            if ($str[$i] > $str[$b]) {
                $x = $str[$i];
                $str[$i] = $str[$b];
                $str[$b] = $x;
            }
        }
    }
    echo "Получили цифры числа $num в 
          порядке неубывания: $str";


    echo '<br>';
    echo "Задание 3";
    echo '<br>';
    $num = mt_rand(50000, 60000);
    echo "Получено случайное число: $num";
    echo '<br>';
    $str = strval($num);

    for ($i = 0; $i < strlen($num); $i++) {
        for ($b = $i + 1; $b < strlen($num); $b++) {
            if ($str[$i] < $str[$b]) {
                $x = $str[$i];
                $str[$i] = $str[$b];
                $str[$b] = $x;
            }
        }
    }
    echo "Получили цифры числа $num в 
                порядке неубывания: $str";







    ?>
</body>

</html>