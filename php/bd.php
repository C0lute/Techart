<?php
$user = "root";
$pass = "root";
$dsn = "mysql:host=localhost;dbname=mysite;charset=utf8";
$db = new PDO($dsn, $user, $pass);
$sql="select *, DATE_FORMAT(`date`, '%d.%m.%Y') date_fmt from `news` order by `date` desc limit ?,?";
$sql1="select *, DATE_FORMAT(`date`, '%d.%m.%Y') date_fmt from `news` order by `date` desc limit 1";
$count="select count(*) cnt from news";
$cnt = $db->query($count);
$cnt1 = $cnt->fetch();
$limit = 4;
$pages = ceil($cnt1['cnt']/$limit);
$page = (int) ($_GET['page'] ?? 1);
//  $querry = $db->prepare($sql1);
//  $querry->bindValue(1,($page-1), PDO::PARAM_INT);
//  $querry->execute();
$querry = $db->prepare($sql);
$querry->bindValue(1,($page-1)*$limit, PDO::PARAM_INT);
$querry->bindValue(2, $limit, PDO::PARAM_INT);
$querry->execute();
//  $res = $db->query($sql);
$res1 = $db->query($sql1);
/////запрос на страницы////
//echo $pages;
//die(var_export($_GET,true));
//echo $_GET['p'];
?>