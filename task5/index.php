<?php
$str1=file_get_contents('text1.txt');

preg_match_all("/.*?[.?!](?:\s|$)/s", $str1,$arr1);
echo '$arr1';
echo '<pre>';
print_r($arr1);
echo '</pre>';

$str2=file_get_contents('text2.txt');
preg_match_all("/.*?[.?!](?:\s|$)/s", $str2,$arr2);

echo '$arr2';
echo '<pre>';
print_r($arr2);
echo '</pre>';


// Складываем массивы
$arr3=array_merge($arr1[0],$arr2[0]);
echo '$arr3';
echo '<pre>';
print_r($arr3);
echo '</pre>';

//Обрезаем пробелы у всех предложений
//Так как у последних предложений нету пробелов,
//то второе и третье предложения
//в text2.txt будут не равны, если удалять знак препинания.
$arr4=[];
echo "<br>";
echo '$arr4';
echo "<br>";
for ($i=0; $i < count($arr3); $i++) { 
    $arr3[$i]=trim($arr3[$i]);
    array_push($arr4,$arr3[$i]);
}
echo '<pre>';
print_r($arr4);
echo '</pre>';

$arr5=[];
//В строке удаляем знак препинания в конце предложения,
//чтобы потом в array_unique() откинуть элементы  с одинаковыми значениями,
//так как знаки препинания могут быть разными

for ($i=0; $i < count($arr4); $i++) { 
    $str=mb_substr($arr4[$i],0,-1);
    array_push($arr5,$str);
}
echo '$arr5';
echo '<pre>';
print_r($arr5);
echo '</pre>';

$arrResult1 = array_keys(array_filter(array_count_values($arr5), function($v){
    return $v > 1;
 }));

echo '$arrResult1';
echo '<pre>';
print_r($arrResult1);
echo '</pre>';

//Добавляем в конец строки знак препинания, который был раньше
//у первого повторяющего элемента
$arrResult2=[];
for ($i=0; $i < count($arrResult1); $i++) { 
    for ($j=0; $j < count($arr4); $j++) { 
        if($arrResult1[$i]==$arr5[$j]){
            $arrResult1[$i]=$arrResult1[$i].mb_substr($arr4[$j],-1,1);
            echo '<br>';
        }
    }
    array_push($arrResult2,$arrResult1[$i]);
    $arrResult1[$i]='';
}
echo '$arrResult2';
echo '<pre>';
print_r($arrResult2);
echo '</pre>';

$strResult=implode(' ',$arrResult2);
echo '$strResult';
echo '<br>';
echo $strResult;

$object=fopen('text3.txt','w');
$file_str=fwrite($object,$strResult);














// $qq=['1','5','2','1','4','4','5','7'];
// $aa=[];
// for ($i=0; $i < count($qq); $i++) { 
//     for ($j=1+$i; $j < count($qq); $j++) { 
//         if($qq[$i]==$qq[$j]){
//         array_push($aa,$qq[$i]);
//         }
// }
// }
// echo '<pre>';
// print_r($aa);
// echo '</pre>';
?>