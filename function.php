<?php
include_once "MobileHead.php";

function classify($arrayList, $network)
{
    $sortArray = [];
    foreach ($arrayList as $item){
        $lengthNumber=strlen($item);
        if ($lengthNumber == 10 ){
            $headNumber = substr($item, 0,3);
            foreach ($network as $headNetwork){
                if ($headNumber == $headNetwork){
                    array_push($sortArray,$item);
                }
            }
        }
    }
    return $sortArray;
}

function displayList($arrayList){
    foreach ($arrayList as $item){
        echo " $item ";
    }
}