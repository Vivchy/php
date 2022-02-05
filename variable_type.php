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

// отладочные функции

echo "<pre> var_dump($c)</pre>";
echo "<pre> print_r($c)</pre>";
echo var_export($c);

$person = [
    'name'=> 'Ivan',
    'surname' => 'Fuckoff'
];

echo "name is $person[name] \n"; // /n переводит в коде в html выводе перевод через html tags
echo "surname is {$person['surname']} </br>";
echo 16 ** 0.5;


