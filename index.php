<?php
echo "Урок 5-6 <br>";
echo "Слайд 17 <br>";
echo "Задание 1 <br>";
echo "<br>";

$letter = [['ййц','цен','уаа','аыв'], ['аро','вв'], ['фва','аук','кен']];
foreach ($letter as $sub_letter) {
    foreach ($sub_letter as $key => $value) {
        if(mb_substr($value,0,1) == 'а'){
        echo $value.' ';
        }
    }
  }

echo "<br>";
echo "<br>";
echo "Задание 2 <br>";
$number = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
$count1=0;

for ($i = 0; $i < count($number); $i++) {
     for ($j = 0; $j < count($number[$i]); $j++) {
        $count2=count($number[$i]);
        $count1++;
     }
    echo "<br>";
echo "Количество элементов ";echo ($i+1)."-го подмассива: ".$count2;
}
echo "<br>";
echo "Общее количество элементов в массиве: ".$count1;
