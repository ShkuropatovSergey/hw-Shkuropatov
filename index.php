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
    for ($i=5; $i <= 13; $i++) { 
        echo $i; echo '<br>';
    }


    // Задание №2
    echo '<br>';
    $num = 1000;
    $i=0;
    echo "Начальное число: $num";echo '<br>';
    while($num >= 50){
        $i++;
        $num = $num/2;
        echo "Число после деления на 2: $num";echo '<br>';
        if($num <= 50){
            echo "Оставшееся число - $num"; echo '<br>';
            echo "Количество итераций - $i"; echo '<br>';
        }

    }
    echo '<br>';
    $num = 1000;
    echo "Начальное число: $num";echo '<br>';
    for ($i=1; ($num >= 50) ; $i++) { 
        $num = $num/2;
        echo "Число после деления на 2: $num";echo '<br>';
        if($num <= 50){
            echo "Оставшееся число - $num"; echo '<br>';
            echo "Количество итераций - $i"; echo '<br>';
        }      
    }


    // Задание №3
    $str="";
    echo '<br>';
    for ($i = 0; ($i <= 10); $i++) { 
        echo $i.'. Если в переменную $i положено число '.$i;
        echo '   ';
        for  ($j = 0; ($j <= 10-$i); $j++){
            if($j < 10-$i){
                $str = $str . "$j".',';
               }else if($j == 10-$i){
                    $str = $str . "$j";
               }
           
        }
        echo ",то строка будет равна $str";
        echo '<br>';
        $str="";
    }
    echo '<br>';
    echo '<br>';


    //Задание №3  
    ?>
    <form action="">
    <label for="num">Введите число:</label>   
    <input type="number" id="num" name="num"  placeholder="Число от 0 до 10" required="true">
    <button type="submit">Получить строку чисел</button>
    </form>
<br>
    <?  
    
@$num = $_GET["num"];
$i = 10;
$str=" ";
$j=0;
    while($j <= $i - $num){ 
        if($j <= $i - $num -1){
            $str = $str . "$j".',';
            }else if($j == ($i- $num)){
                $str = $str . "$j";
             } 
            $j++; 
        echo $str;
        $str=" ";
    }

    ?>
</body>

</html>