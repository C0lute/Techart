<?php
            abstract class Share{
                protected $r;
                abstract public function getArea($r);
            }

            class Cirle extends Share{
                public function getArea($r){
                    $this->r = $r;
                    $S=pi()*pow($r, 2);
                    return $S;
                }

            }
            $user = new Cirle;
            echo "<br>".$user->getArea(5);
            

?>