<?php
    $offer='На занятиях все отлично!';
$array = explode(' ', $offer);
foreach($array as $key=>$value) { 
    if($key % 2 == 0){
        $array1[]='<span style="color:blue">'.$value.'</span>';
    }else{
        $array1[]='<span style="color:yellow">'.$value.'</span>';
    }
}
  $offer=implode(' ',$array1);
echo $offer;

?>