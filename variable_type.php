<?php
echo PHP_INT_MAX;

$a = 'word';
$b = 12;

if (isset($a)){
    echo" $a </br>";
}
unset($a);

echo  is_int($b);
// жесткая ссылка
$c = &$b;
echo $c;
// символическая ссылка

$d = 'c';
echo $$d;

// $d = 34;
// echo $$d; нет %34