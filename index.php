    <?php include 'php/header.php';
     $user = "root";
     $pass = "";
     $dsn = "mysql:host=localhost;dbname=mysite;charset=utf8";
     $db = new PDO($dsn, $user, $pass);
     $sql="select *, DATE_FORMAT(`date`, '%d.%m.%Y') date_fmt from `news` order by `date` desc limit 4";
     $sql1="select *, DATE_FORMAT(`date`, '%d.%m.%Y') date_fmt from `news` order by `date` desc limit 1";
     $res = $db->query($sql);
     $res1 = $db->query($sql1);
    ?>
    
             <?php
                if ($res1){
                    while ($row1=$res1->fetch()){
                        ?>
                <div class="logo" style="background-image: url('/img/<?= $row1['image'] ?>');">
                    <div class="logo_text container">
                        <h1 class="h1">Возвращение этнографа</h1>
                        <p class="logo_p">Сегодня с Проксимы вернулась этнографическая экспедиция Джона Голдрама.</p>
                        <?
                    }
                }
            ?>

        </div>
    </div>
    <div class="container">
        <h2 class="h2">Новости</h2>
        <div class="news">  
             <?php 
                if ($res){
                    while ($row=$res->fetch()){
                        ?>
                        <a class="news-item" href="/">
                        <span class="news-date"><?= $row['date_fmt'] ?></span>
                        
                        <h3 class="news-title"><?= strip_tags($row['title'], '<p>') ?></h3>
                        <p class="news-content"><?= strip_tags($row['announce']) ?></p>

                            <button class="news-button" href="/">ПОДРОБНЕЕ
                                <svg height='25px'  width='32px' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'>
                                    <g fill='none' fill-rule='evenodd'>
                                        <path d='m9.88528137 7.48578644 1.41421353 1.41421356-6.0994949 6.0997864 25.4426407.0002136v2l-25.4286407-.0002136 6.0854949 6.085495-1.41421353 1.4142135-8.48528137-8.4852813.022-.0214272-.022-.0217186z'
                                        fill='#841844' transform='matrix(-1 0 0 -1 32.04264 31.985282)' />
                                    </g>
                                </svg>
                            </button>
                        </a>
                        <?
                    }
                }
            ?>
        </div>
        <div class="btn-menu"> <!-- кнопки навигации -->
            <a href="/" class="btn-item">1</a>
            <a href="/" class="btn-item">2</a>
            <a href="/" class="btn-item">3</a>
            <a href="/" class="btn-item">
                <svg height='25px'  width='32px' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'>
                    <g fill='none' fill-rule='evenodd'>
                        <path d='m9.88528137 7.48578644 1.41421353 1.41421356-6.0994949 6.0997864 25.4426407.0002136v2l-25.4286407-.0002136 6.0854949 6.085495-1.41421353 1.4142135-8.48528137-8.4852813.022-.0214272-.022-.0217186z'
                            fill='#841844' transform='matrix(-1 0 0 -1 32.04264 31.985282)' />
                    </g>
                </svg>
            </a>
        </div>
        <?php include 'php/footer.php';?>
    </div>
</body> 
</html>