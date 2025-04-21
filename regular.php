<?php
            // $input = "atext";
            // echo preg_match('{a+}', $input);
            // echo "<br>".preg_match('{a*}', $input);
            // echo "<br>".preg_match('{cat}', $input);
            // echo "<br>".preg_match('{ab+}', $input);
            // echo "<br>".preg_match('{(ab)+}', $input);
            // echo "<br>".preg_match('{^a+}', $input);
            // $article= "a576";
            // echo "<br>".preg_match('{^[a-z][0-9]+$}', $article);
            // $tag= "</a>";
            $name= "\$tag";
            $name1="\$_tag";
            $name2="$12";
            
            //echo $name;
            echo "<br> переменная = ".$name. " : ".preg_match('{$(_|[^\D\!\@\#\$\%\^\&\*\(\)=\+\~]*)}', $name); //символы
            echo "<br> переменная = ".$name1. " : ".preg_match('{$(_|[^\D\!\@\#\$\%\^\&\*\(\)=\+\~]*)}', $name1); //символы
            echo "<br> переменная = ".$name2. " : ".preg_match('{$(_|[^[0-9]\!\@\#\$\%\^\&\*\(\)=\+\~]*)}', $name2); //символы
            $string="+7(915)111-11-11";
            $string2="(915)111-11-11";
            echo "<br>";
            echo "<br> телефон с +7 = ".preg_match('{(\+[0-9])?\(\d{3}\)\d{3}-\d{2}-\d{2}}', $string); //телефон
            echo "<br> телефон без +7= ".preg_match('{(\+[0-9])?\(\d{3}\)\d{3}-\d{2}-\d{2}}', $string2); //телефон

            $domen = "techart.ru";
            $domen1 = "web.techart.net";
            $domen2 = "test.web.techart.ru"; 
            $domen3 = "123.tech321.net";
            echo "<br>";
            echo "<br> домен = ".$domen." : ".preg_match('{(([a-z 0-9])+\.)?([a-z 0-9])+\.*}', $domen, $m); 
            echo "<br> домен = ".$domen1." : ".preg_match('{(([a-z 0-9])+\.)?([a-z 0-9])+\.*}', $domen1);
            echo "<br> домен = ".$domen2." : ".preg_match('{(([a-z 0-9])+\.)?([a-z 0-9])+\.*}', $domen2);
            echo "<br> домен = ".$domen3." : ".preg_match('{(([a-z 0-9])+\.)?([a-z 0-9])+\.*}', $domen3);  
            
            echo '<pre>';
            print_r($m);
            echo '</pre>';

            $string = "name=Федя\n email=sd@mail.ru\n age=98\n";
            $strings = explode("\n", $string);
            $result = [];

            foreach ($strings as $line) {
                $trimmed = trim($line);
                if (empty($trimmed)) continue;
                
                // Используем preg_match с правильным регулярным выражением
                if (preg_match('{^([^=]+)=(.*)$}', $trimmed, $matches)) {
                    $key = trim($matches[1]);
                    $value = trim($matches[2]);
                    $result[$key] = $value;
                }
                echo '<pre>';
                print_r($result);
                echo '</pre>';
                
            }
          
            
            



?>