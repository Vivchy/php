<?php
$data['user']='simple';
foreach ($data as $k=>$v){
    echo $k . '</br>';
    echo $v . '</br>';
}
$data = ['file'=>'some file', 'size' => 20, 'client' =>['cl1'=>'one', 'cl2'=>'two']];
echo $data['client']['cl2'];

foreach ($data['client'] as $k => $v){
    echo "{$k} => {$v}" . "</br>";
}
foreach ($data['client'] as $k => $v){
    $v ='lost';
    echo "{$k} => {$v}" . "</br>";
}
var_dump($data);
// изменение значения массива через ссылку &
foreach ($data['client'] as $k => &$v){
    $v ='lost';
    echo "{$k} => {$v}" . "</br>";
}
var_dump($data);

$str = "a b c d e f g";
$list = explode(' ', $str);
var_dump($list);

$str2 = implode(',', $list);
echo "</br> $str2 </br>";

$save = serialize($data);
echo $save;
$cloneData = unserialize($save);
print_r($cloneData);