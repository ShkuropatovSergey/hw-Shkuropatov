<?php
//Урок 9-10;
//Слайд-16;
//Задание 7;
//Получение чисел Фибоначчи

//Здесь первые два числа равны 0 и 1, а каждое последующее 
//число равно сумме двух предыдущих чисел.
function fibonacci1($n) {
  $res = array(0,1);
  for( $i=0; $i < ($n-2); $i++ ){
      $cur = $res[$i] + $res[$i+1];
      array_push( $res, $cur );
  }
  return implode(", ",$res);
}

echo fibonacci1(10) ;

echo '<br>';
//Здесь первые три числа равны 0, 1, 2, а каждое последующее 
//число равно сумме трех предыдущих чисел.
function fibonacci2($n) {
  $res = array(0,1,2);
  for( $i=0; $i < ($n-2); $i++ ){
      $cur = $res[$i] + $res[$i+1] + $res[$i+2];
      array_push( $res, $cur );
  }
  return implode(", ",$res);
}

echo fibonacci2(10) ;