<?php
$offer="";
function offer($offer)
{
    $array = explode(' ', $offer);
    foreach ($array as $key => $value) {
        if ($key % 2 == 0) {
            $array1[] = '<span style="color:blue">' . $value . '</span>';
        } else {
            $array1[] = '<span style="color:yellow">' . $value . '</span>';
        }
    }
    $offer = implode(' ', $array1);
    return $offer;
}
echo offer("На занятиях все отлично!");
