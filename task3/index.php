<?php
$array = file('text1.txt');
echo '<pre>';
print_r($array);
echo '</pre>';

if (isset($array)){
    $object=fopen('text2.txt','w');
}

for ($i = 0; $i < count($array); $i++) {
    $fioLength = mb_strpos($array[$i], ':');
    $fio = mb_substr($array[$i], 0, $fioLength);
    if (($fio == 'Имя') or ($fio == 'Фамилия')) {
        $positionPerson = mb_strpos($array[$i], " ");
        $person = trim(mb_substr($array[$i], $positionPerson+1));
        //убираем точку с запятой в имени или фамилии
        $person=mb_substr($person,0,-1);
        echo $person;
        $file_str=fwrite($object,"$fio- $person.\r\n");
        // echo $file_str;
    }
}
fclose($object);

