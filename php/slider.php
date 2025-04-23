<?php
include "./bd.php";

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
    <script>
        const swiper = new Swiper('.swiper', {
        // Optional parameters
        // direction: 'vertical',
        // loop: false,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        slidesPerView: 2,
        
        });
    </script>
</body>
</html>