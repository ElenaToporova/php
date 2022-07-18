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
        echo 'задача 1:Сколькими способами можно закрасить N клеток M цветными карандашами?';
        $N = 3;
        $M = 4;
        echo "Ответ: всего". $N**$M. "способов";
        echo $N**$M;
        echo '<br>';
    ?>;

    <?php 
        echo 'задача 2:Дано значение температуры в градусах Цельсия. Вывести температуру в градусах
        Фаренгейта?';
        $temp = 10;
        echo $temp . "градусов по Цельсию = ". $temp*1,8+32;
        echo '<br>';
    ?>;


    <?php 

        echo 'задача 3: Известна стоимость товара в рублях и копейках . Найти стоимость товара в
        копейках?';
        $cost = 10;
        $kop = 50;
        echo "цена в копейках = ". $cost*100+$kop;
        echo '<br>';
    ?>;


    <?php 
        echo 'задача 4: Известно время финиша победителя и следующего за ним соперника (h:m:s). Найти время
        отставания в секундах.';
        $h = 1;
        $m = 32;
        $s = 46;
        $h2 = 1;
        $m2 = 46;
        $s2 = 52;
        $first = $h*60*60+$m*60+$s;
        $second = $h2*60*60+$m2*60+$s2;
        $faster = $second-$first;
        echo '<br>';
        echo "Ответ: второй медленнее первого на ". $faster . "секунд";
        echo '<br>';
    ?>;

    <?php 
        echo 'задача 5: Скорость. Известно время в минутах и расстояние в километрах. Найдите скорость в м/c?';
        $tmin = 26;
        $km = 12;
        $Ums = ($km*1000)/($tmin*60);
        echo '<br>';
        echo "Ответ: скорость объекта". $Ums . "м/с" ;
        echo '<br>';
    ?>;

    <?php 
        echo 'задача 6: Катеты. Даны катеты прямоугольного треугольника. Найдите площадь, периметр и гипотенузу
        треугольника?';
        $a = 4;
        $b = 5;
        $s = $a*$b/2;
        $c = ($a**2+$b**2)**0.5;
        $p = $a + $b + $c;
        echo '<br>';
        echo "Ответ: площадь треугольника". $s  ;
        echo '<br>';
        echo "Длина гипотинузы:". $c  ;
        echo '<br>';
        echo "Периметр треугольника". $p  ;
        echo '<br>';
    ?>;

    <?php 
        echo 'задача 7: Последняя цифра. Известно натуральное число, получить его последнюю цифру?';
        $a = 123;
        $lastSymbol = $a % 10;
        echo "Ответ: последний символ числа". $a . "это ". $lastSymbol ;
        echo '<br>';
    ?>;

    <?php 
        echo 'задача 8: Десятки. Известно натуральное двузначное число, вывести число десятков?';
        $a = 23;
        $b = $a/10;
        $ten = (int) $b;
        echo "Ответ: в числе". $a .  $ten. "десятков" ;
        echo '<br>';
    ?>;

    <?php 
        echo 'задача 9: Десятки 2. Известно натуральное число, вывести число десятков?';
        $a = 5634;
        $b = $a%100;
        $c = $b/10;
        $ten = (int) $c;
        echo '<br>';
        echo "Ответ: в числе " . $a . $ten. "десятков" ;
        echo '<br>';
    ?>;

    <?php 
        echo 'задача 10: Рубли и копейки 2. Известна стоимость товара в копейках C. Найти стоимость в рублях r и копейках k?';
        $costsum =  10768;
        $costrub = (int) $costsum/100;
        $costkop = $costsum % 100;
        echo '<br>';
        echo "Ответ: цена товара ". $costsum. $costrub. "рублей". $costkop. "копеек";
        echo '<br>';
    ?>;

    <?php
        echo 'задача 11: Покупки. Пользователь заказал в интернет магазине n единиц товара стоимостью r рублей и k копеек.
        Найти стоимость покупки в рублях и копейках?';
        $n  =  5;
        $r = 568;
        $k = 35;
        $costrub =  $r*$n + (int)$k*$n/100;
        $costkop = $k*$n%100;
        echo '<br>';
        echo "Ответ: стоимость " . $n. "единиц товара". $costrub . "рублей". $costkop . "копеек" ;
        echo '<br>';
    ?>;

    <?php 
        echo 'задача 12: Квадраты. Дан прямоугольник размером n x m. Сколько целых квадратов со стороной k можно вырезать
        из него?';
        $n = 15;
        $m = 10;
        $k = 5;
        $num =(int)(($n*$m)/($k**2));
        echo '<br>';
        echo "Ответ: всего поместится". $num . "квадратов со сторой" . $k ;
    ?>;
    

    <?php 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'lesson4';
        echo 'кол-во слов в предложении';
        echo '<br>';
        $str = "Оригинальный пример строки";
        $str1 = explode(" ",$str);
        echo '<br>';
        echo "в строке "; echo count ($str1); echo "слова ";
    ?>;

<?php 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'lesson4';
        echo 'сортировка по убыванию';
        echo '<br>';
        $rate = [
            'Вася'=>37,
            'Даша'=>56,
            'Катя'=>12,
        ];
        print_r ($rate);
        echo '<br>';
        arsort($rate);
        print_r ($rate);
    ?>

    <?php 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'lesson4';
        echo '<br>';
        echo 'поиск данных';
        echo '<br>';
        $arr = [
            1=>'Вася',
            5=>'Петя',
            6=>'Коля',
        ];
        $id = 1;
       if (isset($arr[$id])) {
        echo $arr[$id];
       }
       else 
       echo 'таких данных не существует';
    ?>


<?php 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'lesson4';
        echo '<br>';
        echo 'поиск данных';
        echo '<br>';
        $arr = [
            'яблоко'=>'это фрукт',
            'клубника'=>'это ягода',
            'картофель'=>'это овощь',
        ];
        $id = 'яблоко';
       if (isset($arr[$id])) {
        $b = $arr[$id];
        echo $id;
        echo ' - ';
        echo $b;
       }
       else 
       echo 'таких данных не существует';
    ?>


<?php 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'lesson4';
        echo '<br>';
    $name="Данила";
    $rate=[
    "Вася"=>37,
    "Петя"=>100,
    "Маша"=>90,
    "Данила"=>56,
    "Саша"=>80,
    ];
    if(isset($rate[$name])){
    if($rate[$name]<=30){
        echo "Статус: новичок";
    }
    elseif($rate[$name]>30 &&$rate[$name]<=60){
        echo "Статус: мастер";
    }
    elseif($rate[$name]>=61){
        echo "Статус: грандмастер";
    }
    }else{
    echo 'Пользователь не найден';
    }
    ?>

    
<?php 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'lesson4';
        echo '<br>';
    $name="Игорь";
    $rate=[
    "Вася"=>37,
    "Петя"=>13,
    "Маша"=>56,
    "Данила"=>56,
    ];
    if(isset($rate[$name])){
            $rate[$name]++;
        
    }else{
            $rate[$name]=0;
            
    }
    print_r($rate);
?>

<?php 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'lesson4';
        echo '<br>';
    $name="Вася";
    $rate=[
    "Вася"=>-37,
    "Петя"=>13,
    "Маша"=>56,
    "Данила"=>56,
    ];
    if(isset($rate[$name])){
            if ($rate[$name]<0) {
                unset($rate[$name]);
            }
        
    }else {
            echo "данных нет";
            
    }
    print_r($rate);
?>


<?php 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'lesson4';
        echo '<br>';
        echo 'дано название папки написать по частям папку и файл';
     $path='C:\\windows\\file.exe';
     $path1 = explode('\\',$path);
     print_r($path1);

?>

<?php 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'lesson4';
        echo '<br>';
        echo 'homework4';
        echo 'Лето. Дано название месяца, определить время года. Для хранения данных использовать массив.';
        echo '<br>';
     $name = 'february';
     $year  = [
        "january"=> "winter", 
        "february"=>"winter", 
        "december"=>"winter",
        "march"=>"spring",
        "april"=>"spring",
        "may"=>"spring",
        "june"=>"summer",
        "july"=>"summer",
        "August"=>"summer",
        "september"=>"autumn",
        "october"=>"autumn",
        "november"=>"autumn"
    ];
    
     if (isset($year[$name])) {
        if ($year[$name]=="winter") {
            echo $name. " это зима";
        }
        elseif ($year[$name]=="spring") {
            echo $name. " это весна";
        }
        elseif ($year[$name]=="summer") {
            echo $name. " это лето";
        }
        elseif ($year[$name]=="autumn") {
            echo $name. " это осень";
        }

    }
    
    else echo "неверные данные";
?>
<?php 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'lesson4';
        echo '<br>';
        echo 'homework4 ';
        echo 'День недели. Заменить в тексте все английские названия дней недели на русские. Использовать str_replace вместе с массивами.';
        echo '<br>';
     $days=["понедельник","вторник","среда","четверг","пятница","суббота","воскресенье"];
     $englishdays= ["monday", "tuesday", "wednesday", "thursday", "friday","saturday","sunday"];
     print_r(str_replace($englishdays,$days,'это был прекрасный monday, мы пошли гулять, а в friday мы пошли в парк'));
     
?>

<?php 
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo 'lesson4';
        echo '<br>';
        echo 'homework4 ';
        echo 'Корзина. Получить стоимость товара в корзине, по его id';
        echo '<br>';
        $id= 2;
        $price = 'price';
        $card = [ 
            13 => ['name'=>'Кеды', 'count'=>2, 'price'=>123], 
            28 => ['name'=>'Самолет', 'count'=>1, 'price'=>9999999] 
        ];
        if (isset($card[$id])) {
            echo "стоимость ";
            print_r($card[$id]['name']);
            echo " - ";
            print_r($card[$id][$price]);
        }
        
            else 
            echo "нет данных";

     
     
?>

<?php 
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo 'lesson5';
    echo '<br>';
    
?>
<table>
   
<?php 
    $a = 0;
    $b = 1;
    $h = 0.2;
    for  ($x=$a;$x<=$b;$x+=$h):
        $f=$x*$x-sin($x); ?>
        <tr>
            <td><?=$x?></td>
            <td><?=$f?></td>
        </tr>

     
<?php endfor;
    
?>
</table>


<?php 
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo 'вывести текст k раз';
    echo '<br>';

    $k=5;
    $str='привет';
    $x=0;
    while ($x<$k) {
        echo $str;
        echo '<br>';
        $x++;
    }
    
?>

<?php 
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo 'вывести абзацы';
    echo '<br>';

    
    for ($x=1;$x<=$k;$x++){
        echo "<p> Абзац $x </p>";
    }
    
?>
 

<?php 
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo 'задача про выигрыш';
    echo '<br>';

    $A=1000;
    $B=100;
    if ($A>=$B){
        for ($x=0;$A>=$B;$A=$A/2){
            $x++;
        }
        echo "через $x дней";

    }
    else echo 0;
    
?>

<?php 
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo 'вывести таблицу рейтинг';
    echo '<br>';
    
?>
<?php 
  $rate=[
    "Вася"=>37,
    "Петя"=>13,
    "Маша"=>56,
    "Данила"=>56,
    "Маша"=>0,
    ];  
    arsort($rate);
    $s=0;
    $sum=array_sum($rate);
?>
<table>
    <thead>
        <tr>
            <th>Имя </th>
            <th>Рейтинг</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        foreach ($rate as $name => $value):?>
        <tr>
            <td><?=$name?></td>
            <td><?=$value?></td>
        </tr>
        
        <?php endforeach ?>
    </tbody>
</table>
<table>
    <tr>
    <td> "общий рейтинг"</td>
        <td><?= $sum?></td>
        
    </tr>
    <td> "средний рейтинг"</td>
        
        <td> <?= $sum/count($rate)?></td>
    </tr>
</table>


</body>
</html>