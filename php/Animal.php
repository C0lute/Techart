<?php
            class Animal{
                protected $name;
                protected $age;
                protected $sound;
                public function makeSound($sound){
                   
                    $this->sound = $sound;
                    //return "Возраст:".$age." издает звук: ".$sound;
                    return "издает звук: ".$sound;
                }
                public function setAge($age){
                    $this->age=$age;

                    
                }

            }

            class Dog extends Animal{
                        public function setAge($age){
                            if($age > 15){
                                return 0;
                            }
                            else{
                                parent::setAge($age);
                                return $age;
                            }
                        }
                        
            }
            
            $user = new Dog;
            echo "<br> Возраст:".$user->setAge("14")."<br>".$user->makeSound("Гав");
?>