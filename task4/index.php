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

//Откидываем элементы с одинаковыми значениями
$arrResult1=array_unique($arr5, $flags = SORT_STRING);
echo '$arrResult1';
echo '<pre>';
print_r($arrResult1);
echo '</pre>';

//Распологаем ключи массива по порядку
$arrResult2=[];
foreach($arrResult1 as $value){
   array_push($arrResult2,$value);
}
echo '$arrResult2';
echo '<pre>';
print_r($arrResult2);
echo '</pre>';

//Добавляем в конец строки знак препинания, который был раньше
$arrResult3=[];
for ($i=0; $i < count($arrResult2); $i++) { 
    for ($j=0; $j < count($arr4); $j++) { 
        if($arrResult2[$i]==$arr5[$j]){
            $arrResult2[$i]=$arrResult2[$i].mb_substr($arr4[$j],-1,1);
            echo '<br>';
        }
    }
    array_push($arrResult3,$arrResult2[$i]);
    $arrResult2[$i]='';
}
echo '$arrResult3';
echo '<pre>';
print_r($arrResult3);
echo '</pre>';

$strResult=implode(' ',$arrResult3);
echo '$strResult';
echo '<br>';
echo $strResult;

$object=fopen('text3.txt','w');
$file_str=fwrite($object,$strResult);
?>