<?php
// Урок 5-6
// Слайд 15
//Задание 1
echo "Урок 5-6";
echo '<br>';
echo "Слайд 15";
echo '<br>';
echo "Задание 1";
echo '<br>';
$j=50;
$sum=0;
$arr=[];
for($i = 0; $i < 5; $i++){
$arr[$i] = $j-$i*5;
echo $arr[$i]. " ";
}
echo '<br>';
for($i = 0; $i < 5; $i++){
  $sum+=$arr[$i];
}
echo "Сумма чисел массива равна: $sum";
echo '<br>';
echo '<br>';
//Задание 2
echo "Задание 2";
echo '<br>';
$ar=[];
for($i = 0; $i < 5; $i++){
  $ar[$i]=mt_rand(0,20);
  echo $ar[$i]. " ";
  }
  echo '<br>';
  for($i = count($ar)-1; $i >= 0; $i--){
    echo $ar[$i]. " ";
    }
  echo '<br>';
  echo '<br>';

//Задание 3
echo "Задание 3";
echo '<br>';
// $j=50;
$img=[];
$el=0;
// формирование массива

for($i = 0; $i < 5; $i++){
$img[$i] = 1+$i.'.jpg';
echo $img[$i]. " ";
}
echo '<br>';echo '<br>';
// выбор элемента массива
for($i = 0; $i < count($img); $i++){
  $el=mt_rand(1,count($img));
  echo '<br>';
  ?><img src= "images/<?php echo $el ?>.jpg" alt=""><?
  }
  echo '<br>';
 
//Задание 4
echo "Задание 4";
echo '<br>';
$rand=[];
$count=mt_rand(5,10);
echo "Случайное количество элементов в массиве";
echo '<br>';
echo $count;
echo '<br>';
echo "Случайный массив";
echo '<br>';
for ($i=0; $i < $count; $i++) { 
    $rand[$i] = mt_rand(-100,100);
    echo $rand[$i].    "     ";
}
echo '<br>';
$positive=[];
$negative=[];
$s1=0;
$s2=0;

for ($i = 0; $i < count($rand); $i++) {
  if($rand[$i] >= 0){
    $positive[$s1]=$rand[$i];
    $s1++;
  }else if($rand[$i] < 0){
    $negative[$s2]=$rand[$i];
    $s2++;
  }
}
echo '<br>';
print_r($positive);
echo '<br>';
print_r($negative);
echo '<br>';

$plus=$positive[0];
for ($i = 0; $i < count($positive); $i++) {
  if($positive[$i] < $plus){
    $plus=$positive[$i];
  }
}
$minus=$negative[0];
for ($i = 0; $i < count($negative); $i++) {
  if($negative[$i] > $minus){
    $minus=$negative[$i];
  }
  }
echo '<br>';
echo "Минимальное положительное число будет:  $plus";
echo '<br>';
echo "Максимальное отрицательное число будет:  $minus";
echo '<br>';
echo '<br>';

// Слайд 16
//Задание 1
echo "Слайд 16";
echo '<br>';
echo "Задание 1";
echo '<br>';
$lesson = ["математика"=>"q","физика"=>"s","химия"=>"z","информатика"=>"d"];
$mas=[];
//Формируем оценки группы из пяти человек
for ($i=0; $i < 5 ; $i++) { 
  foreach($lesson as $key => $item){
    $lesson[$key] = mt_rand(3,5);
   }
   $mas[$i]=$lesson;
  }
  echo " Массив со случайными оценками группы из пяти человек"
  ?><pre><?
  print_r($mas);
  ?></pre><?

  //Определяем среднюю оценку группы по каждому предмету
  $middle=0;
  $lesson_middle=[];
 foreach($lesson as $key => $item){
      for ($i=0; $i < 5 ; $i++){   
         $middle =$middle+ $mas[$i][$key];
      }
    
      $lesson_middle[$key]=round($middle/count($mas)); //средняя оцнка по каждому предмету
      $middle=0; 
    }
    echo '<br>';
    echo "Массив со средней оценкой по каждому"; echo '<br>'; 
    echo "предмету всех учеников"; echo '<br>';
    echo '<br>';
    print_r($lesson_middle);
echo '<br>';

 //Определяем сумму оценок по каждому предмету
 echo '<br>';
$sum=0;
$lesson_summa=[];
foreach($lesson as $key => $item){
  for ($i=0; $i < 5 ; $i++){   
     $sum =$sum+ $mas[$i][$key];
  }
  $lesson_summa[$key]=$sum;
  $sum=0;
  }
  echo '<br>';
  echo "Массив с суммой оценок по каждому предмету";
  echo '<br>';
  print_r($lesson_summa);

?>

