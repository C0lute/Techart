<?php
include "./bd.php";


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Слайдер</title>
</head>
<body>
    <div class="swiper">
        <div class="swiper-wrapper">
    <?php
     if ($res){
        while ($row=$res->fetch()){?>
                <div class="swiper-slide"><img src="/img/<?= $row['image'] ?>"></div>
               
               
                
                <?

        }
        
    }
       
    ?>
    
        </div>
    </div>
    <script src="../webpack/dist/new.js">
    </script>
</body>
</html>