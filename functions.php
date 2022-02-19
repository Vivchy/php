<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>functions</title>
</head>
<body>
    <div>
        <h4>обычная функция</h4>
        <div>
            <?php
            function fc($a){
                $a *=$a;
                echo "inside function a = $a </br>";
            }
            $a = 2;
            fc($a);
            echo $a;
            ?>

        </div>
        <h4>ссылочная функция</h4>
        <p>изменение переменной вне функции</p>
        <div>
            <?php
            function fc2(&$a){
                $a *=$a;
                echo "inside function a = $a </br>";
            }
            $a = 2;
            fc2($a);
            echo $a;
            ?>

        </div>
        <h4>переменное число аргументов</h4>
        <div>
            <?php
            function fc3(...$arr){
                foreach ($arr as $item){
                    echo $item;
                }
            }

            fc3('one', 'two', 'three');
            ?>
        </div>
        <div>
            <h4>строгая типизация в функции</h4>
            <?php
            function sum(int $a, float $b) : float{
                return $a + $b;
            }
            echo sum(5.4, 5.2);
            ?>
        </div>
        <div>
            <h4>Хеш-функции</h4>
                <?php
                $str = 'qwerty1234';
                $pass = md5($str);
                echo $pass . '<br/>';

                ?>

        </div>
        <div>
            <h4>рандом</h4>
            <?php
            $count = 0;
            $arr = [];
            for ($i = 0; $i<=1000; $i++){
                $rand = mt_rand(1, 2);
                if (!isset($arr[$rand])){
                    $arr[$rand] = 1;
                }
                else $arr[$rand]++;
            }
            ksort($arr);
            foreach ($arr as $index => $item) {
                echo $item . '<br/>';
            }
            var_dump($arr);
            ?>
        </div>
    </div>
</body>
</html>