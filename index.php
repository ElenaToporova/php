<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo 'задача 1';
    $N = 3;
    $M = 4;
    echo 'Ответ: всего';
    echo $N**$M;
    ?>;

<?php 
    echo 'задача 2';
    $temp = 10;
    echo $temp . "градусов по Цельсию = ". $temp*1,8+32;
?>;


<?php 

    echo 'задача 3';
    $cost = 10;
    $kop = 50;
    echo "цена в копейках = ". $cost*100+$kop;
?>;


<?php 
    echo 'задача 4';
    $h = 1;
    $m = 32;
    $s = 46;
    $h2 = 1;
    $m2 = 46;
    $s2 = 52;
    $first = $h*60*60+$m*60+$s;
    $second = $h2*60*60+$m2*60+$s2;
    $faster = $second-$first;

    echo "Ответ: второй медленнее первого на ". $faster . "секунд";
?>;
</body>
</html>