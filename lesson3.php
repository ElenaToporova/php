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
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo 'lesson 3 ';
    echo '<br>';
    echo 'Задача 1: целое число вывести в шестизначном формате.'; 
    echo '<br>';
    $number = 46;
    echo printf("Ваш номер %06d", $number);

?>

<?php 
    echo '<br>';
    echo 'lesson 3 ';
    echo '<br>';
    echo 'Задача 2: секунды в формат времени.'; 
    echo '<br>';
    $second = 7638;
    $h = intdiv($second,3600);
    $mall = $second-($h*3600);
    $m = intdiv($mall,60);
    $s = $second-($h*3600)-($m*60);
    printf("%02d:%02d:%02d", $h,$m,$s);

?>

<?php 
    echo '<br>';
    echo 'lesson 3 ';
    echo '<br>';
    echo 'Задача 2: есть фио полное надо сделать вывод фамилия и инициалы.'; 
    echo '<br>';
    $f = "Иванов ";
    $i = "Иван";
    $o = "Иванович";
    echo $f,  mb_substr ($i,0,1), "."; 
    echo mb_substr ($o,0,1), "."; 
   
    
    
?>

<?php 
    echo '<br>';
    echo 'lesson 3 ';
    echo '<br>';
    echo 'Задача 3: есть пароль, определить его длину, если меньше 8 вывести предупреждение.'; 
    echo '<br>';
    $password = "Qwerty 1234";
    $lenght = mb_strlen ($password);
    if ($lenght<8 || (mb_strstr($password, " ")!==false)) {
        echo "Пароль слишком короткий или внутри пробел";
    }
    
    else echo "все ок";  
    
?>

<?php 
    echo '<br>';
    echo 'lesson 3 ';
    echo '<br>';
    echo 'Задача 3: совпадает ли количество букв.'; 
    echo '<br>';
    $a = "Это первая фраза";
    $b = "Это первая фраза";
    if (mb_strlen ($a) === mb_strlen ($b)) {
        echo "Фразы одинаковой длины";
    }
    
    else echo "фразы разной длины";
 
?>
<?php 
    echo '<br>';
    echo 'lesson 3 ';
    echo '<br>';
    echo 'Задача 4: обрезать текст до 5.'; 
    echo '<br>';
    $a = "Это первая фраза";
    
    if (mb_strlen ($a) >10 ) {
        echo mb_substr ($a,0,5); echo "... <a href=\"#\">Подробнее </a>" ;
    }
  
?>

<?php 
    echo '<br>';
    echo 'lesson 3 ';
    echo '<br>';
    echo 'Задача 5: сокращение слова.'; 
    echo '<br>';
    $a = "Обороноспособность";
    
    if (mb_strlen ($a) >7 ) {
        echo mb_substr ($a,0,4); echo "-"; echo mb_substr ($a,-2); 
    }
    else echo $a;
  
?> 


<?php 
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo 'homework 3 ';
    echo '<br>';
    echo 'Задача 1:Коровы. Посчитать, сколько раз символ встречается в строке.'; 
    echo '<br>';
    $str = "Просто прИМЕр СТРОКи";
    $a = 'о';
    echo $str;
    echo '<br>';
    echo $a;
    echo '<br>';
    echo mb_substr_count($str, $a);
  
?> 

<?php 
    echo '<br>';
    echo '<br>';
    echo 'homework 3 ';
    echo '<br>';
    echo 'Задача 2:Caps Lock. Дана строка пароля, проверить совпадает ли она со строкой "qwerty123". 
    В случае если совпадает, вывести "Добро пожаловать!", если пароль введен в верхнем регистре, то 
    выводить "Возможно нажата клавиша Caps Lock...", во всех остальных случаях сообщать об ошибке.'; 
    echo '<br>';
    $str = "hfjdffjhf";
    echo $str;
    echo '<br>';
    if (mb_strstr($str,'qwerty123')) {
        echo "Добро пожаловать";
    }
    elseif (mb_strstr($str,'QWERTY123')) {
        echo "Возможно нажата клавиша Caps Lock";
    }
    else echo "Пароль неверный";
  
?> 

<?php 
    echo '<br>';
    echo '<br>';
    echo 'homework 3 ';
    echo '<br>';
    echo 'Задача 3:Регистронезависимые коровы. Посчитать, сколько раз символ встречается в строке, без учета регистра, т.е. А и а считаются одинаковыми символами.'; 
    echo '<br>';
    $str = "Просто прИМЕр СТРОКи";
    $strLover = mb_convert_case ($str, 1);
    $a = 'о';
    echo $str;
    echo '<br>';
    echo $a;
    echo '<br>';
    echo mb_substr_count($strLover, $a);
  
?> 

<?php 
    echo '<br>';
    echo '<br>';
    echo 'homework 3 ';
    echo '<br>';
    echo 'Задача 4:Курсив. В заданном тексте подсветить курсивным шрифтом все вхождения заданного слова в любом регистре. Вывести текст до и после преобразования.'; 
    echo '<br>';
    $str = "Вася Коля Петя вася коля петя ВАСЯ КОЛЯ ПЕТЯ";
    $a = 'вася';
    
    
  
?> 
</body>
</html>