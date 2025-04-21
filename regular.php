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
            
            //echo "<br>".preg_match('{(([a-z 0-9])+\.)?([a-z 0-9])+\.*}', $domen3, $m);  
            echo '<pre>';
            print_r($m);
            echo '</pre>';

            $string ="name = Федя\n email = sd@mail.ru\n age = 98\n";
            $strings = explode("\n", $string);
            $massiv=[];
            echo "<br>";
            //var_dump($strings);
            // echo "<br>".$strings[0];
            // echo "<br>".$strings[1];
            var_dump($strings);
            foreach($strings as $item => $value){
                //$trimmed = trim($strings, " ");
                if(preg_match('{\d+\ = \d+}', $strings[$item], $m)){

                }
             //var_dump($m);
             echo "<br>".var_dump($m);

            }
           

            

            // while ($i<count($strings)){
            //     preg_match('{}', $string[$i], $m);
            //     echo $m;
            //     //$massiv += [$strings[$i]=>$strings[++$i]];
                
            //     $i++;   
               
                
            // }
            // //var_dump($massiv);
            // echo '<pre>';
            // print_r($massiv);
            // echo '</pre>';





            
            // $string ="name = Федя\n email = sd@mail.ru\n age = 98\n";
            // $strings = explode("\n", $string);
            // $massiv=[];
            // echo "<br>";
            // //var_dump($strings);
            // echo "<br>".$strings[0];
            // echo "<br>".$strings[1];
            
            // $i=0;
            // while ($i<count($strings)){
            //     //$trimmed = trim($strings[$i], "");
            //     echo "<br>".$trimmed;
            //     //$massiv += [$strings[$i]=>$strings[++$i]];
            //     $i++;
               
                
            // }
            // //var_dump($massiv);
            // echo '<pre>';
            // print_r($massiv);
            // echo '</pre>';
            
            



?>