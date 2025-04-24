
<!DOCTYPE html>
<html lang="ru">
<html>
 <head>
   <title>Тестовое задание Techart</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/styles/normalize.css">
   <link rel="stylesheet" href="/styles/style.css">
   <style>
        *{
            padding: 10px;
        }
        p{
            font-size:24px;
        }
   </style>
 </head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        echo "<br><p>Задача 1.1</p>";
        $month =rand(1,12);
        if (($month <= 2) || ($month == 12)){
            echo "Зима";
        }
        else if(($month >= 3) && ($month <= 6)){
            echo "Весна";
        }
        else if(($month >= 7) && ($month <= 9)){
            echo "Лето";
        }
        else{
            echo "Осень";
        }
        echo "<br><p>Задача 1.2</p>";
        $stroka="abcde";
        if (mb_substr($stroka, 0, 1) == "a"){
            echo "буква а является первой";
        }
        else{
            echo "буква а не является первой";
        }
        echo "<br><p>Задача 1.3</p>";
        $stroka=12345;
        if (mb_substr($stroka, 0, 1) == "1"){
            echo "цифра является 1";
        }
        else if (mb_substr($stroka, 0, 1) == "2"){
            echo "цифра является 2";
        }
        else if (mb_substr($stroka, 0, 1) == "3"){
            echo "цифра является 3";
        }
        else{
            echo "цифра не является 1,2,3";
        }
        echo "<br><p>Задача 1.4</p>";
        $stroka=rand(100, 999);
        echo "Число =".$stroka."<br>";
        $stroka=mb_substr($stroka, 0, 1)+mb_substr($stroka, 1, 1)+mb_substr($stroka, 2, 1);
        echo "Сумма цифр этого числа =".$stroka;
        echo "<br><p>Задача 1.5</p>";
        $stroka=rand(100000,999999);
        echo "Число =".$stroka."<br>";
        $stroka_pervaya=mb_substr($stroka, 0, 1)+mb_substr($stroka, 1, 1)+mb_substr($stroka, 2, 1);
        echo $stroka_pervaya."<br>";
        $stroka_vtoraya=mb_substr($stroka, 3, 1)+mb_substr($stroka, 4, 1)+mb_substr($stroka, 5, 1);
        echo $stroka_vtoraya."<br>";
        if ($stroka_pervaya == $stroka_vtoraya){
            echo "Сумма первых 3 числен равна сумме вторых 3 чисел";
        }
        else{
            echo "Сумма не равна";
        }

        echo "<br><p>Задача 2.1</p>";
        $str = 'abc';
	    echo $str[2];
        echo "<br><p>Задача 2.2</p>";
        $num1 = 1;
	    $num2 = 2;
	    var_dump('result: '.$num1 + $num2);
        echo "<br><p>Задача 2.3</p>";
        $num = "123";
        echo $num[0];
        echo "<br><p>Задача 2.4</p>";
        $str = 'abc def';
	    echo $str[6]; // ожидаем 'f'
        echo "<br><p>Задача 2.5</p>";
        $num1 = 1;
        $num2 = 2;
        $num3 = 3;
        
        echo $num1 + $num2 + $num3; // должно вывести 6
        echo "<br><p>Задача 2.6</p>";
        echo "1"."2"; // должно быть '12'
        echo "<br><p>Задача 2.7</p>";
        $str = 'abcdef';
	    echo strlen($str); // выводит 7
        echo "<br><p>Задача 2.8</p>";
        $a = 0;
	    echo ++$a;
        echo "<br><p>Задача 2.9</p>";
        $num = "123";
	    echo $num[0] + $num[1]; 
        echo "<br><p>Задача 2.10</p>";
        $str = 'abc';
	    echo strlen($str);
        echo "<br><p>Задача 2.11</p>";
        $a = 24 * 60 * 60;
	    echo $a;
        echo "<br><p>Задача 2.12</p>";
        echo 1.2 + 1.3; // должно быть 2.5
        echo "<br><p>Задача 2.13</p>";
        $str = 'abc';
	    echo $str[strlen($str)-1];
        echo "<br><p>Задача 2.14</p>";
        $num = "123";
	    echo $num[0] + $num[1] + $num[2];
        echo "<br><p>Задача 2.15</p>";
        $a = 123;
        $b = 456;
        $s = $a + $b;
        
        echo $s;
        echo "<br><p>Задача 2.16</p>";
        $num1 = 2.5;
        $num2 = 3.5;
        echo $num1 + $num2; // ожидаем 6
        echo "<br><p>Задача 2.17</p>";
        $aaa = 1;
        $bbb = 2;
        $ccc = 3;
        
        var_dump($aaa + $bbb + $ccc);
        echo "<br><p>Задача 3.1</p>";
        $mas=[1,2,3,4];
        $sum=0;
        for ($i=0; $i<count($mas); $i++){
            $sum=$sum + $mas[$i];
        }
        echo $sum/$i    ;
        echo "<br><p>Задача 3.2</p>";
        $sum=0;
        $i=1;
        while ($i<100){
            $sum= $sum + $i;
            $i++;
        }
        echo $sum;
        echo "<br><p>Задача 3.3</p>";
        $i=1;
        while ($i<100){
            echo $i."<br>";
            $i++;
        }
        echo "<br><p>Задача 3.4</p>";
        $mas=[];
        $i=0;
        while (count($mas)<=9){
            $mas[$i] = "x";
            $i++;
        }
        echo '<pre>';
        print_r($mas);
        echo '</pre>';
        echo "<br><p>Задача 3.5</p>";
        $mas= range ( 1 , 10 ); 
        shuffle ( $mas ); 
        echo '<pre>';
        print_r($mas);
        echo '</pre>';
        echo "<br><p>Задача 3.6 </p>";
        
        //$fact1 = gmp_fact(25);
        //echo "Случайное число = ".$stroka."его факториал = ". gmp_strval($fact1);
        ?>

</head>
<body>
    <script src="../webpack/dist/new.js"></script>
</body>
</html>