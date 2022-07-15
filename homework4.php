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
</body>
</html>