<?php

$res = file(__DIR__ . '/imagesDb.txt');
$lines = implode($res, ' ');
$arr_of_images_with_empty_els = explode(" ", $lines);
$arr_of_images = array_filter($arr_of_images_with_empty_els, function($element) { //Убрать все пустные элементы из массива
    return !empty($element);
});

$number_of_images = count($arr_of_images);



