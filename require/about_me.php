<?php
    $about_me='Я закончил химико-технологический
    институт по специальности "Технология
    неорганических веществ". Работаю сейчас по
    специальности на химическом заводе.
    Недавно закончил курсы web-разработки в
    Скандинавской школе.Там в основном уклон
    был на фронтенд.Сейчас хотел бы еще
    битрикс освоить.';
    function about_me($about_me)
{
$arr = preg_split('/(?<=[.?!])\s+(?=[a-zа-яё])/i', $about_me);
foreach($arr as $key=>$value) { 
    if($key==0){
        $arr1[]='<span style="color:blue">'.$value.'</span>';
    }else{
        $arr1[]=$value;
    }
}
  $about_me=implode(' ',$arr1);
return $about_me;
}
echo about_me($about_me);
?>