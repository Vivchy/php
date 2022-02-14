<?php
function crange($size){
    $arr = [];
    for ($i=0; $i < $size; $i++){
        $arr[] = $i;
    }
    return $arr;
}

$range = crange(4024000);
foreach ($range as $i){
    $i;
}

echo memory_get_usage()/1000000 . '</br>';

function crange2($size){
    for ($i=0; $i < $size; $i++){
        yield $i;
    }
}

$range2 = crange2(4024000);
foreach ($range2 as $i){
    $i;
}
echo memory_get_usage()/1000000 . '</br>';