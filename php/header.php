<? 
    $page = "$_SERVER[REQUEST_URI]";
    
?>
<!DOCTYPE html>
<html lang="ru">
<html>
 <head>
   <title>Тестовое задание Techart</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/styles/normalize.css">
   <link rel="stylesheet" href="/styles/style.css">
 </head>
<body>
<header class="header container">
    
        <a href="/">
            <img src="/img/logo.svg" alt="Логотип">
        </a>
        <?php

            // include 'User.php';
            // include 'BankAccount.php';
            // include 'Animal.php';
            // include 'Share.php';
             //include 'interface.php';
            //include 'libs.php';
        ?>
<? 
    if ($page == "/detal.php"){
        ?>
        <hr style="margin: 2% auto;">
        <?
        include 'menu.php';
        foreach($menu as $item => $value){
            echo '<a href="' . $item . '">' . $value . '</a>';
        }   
    }
?>
        

</header>

