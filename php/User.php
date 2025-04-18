<?php
            class User{
                // public $name = "Алексей";
                // public $age = "24";
                public function ShowUser($name, $age){
                    $stroka = "Привет, меня зовут ".$name." и мне ".$age." года";
                    return $stroka;
                }
            }
            $user = new User;
            echo $user->ShowUser("Алексей", "24");
?>