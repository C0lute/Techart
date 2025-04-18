<?php
            class BankAccount{
                private $number, $balance;
                public function __construct($number, $balance = 0){
                    $this->number = $number;
                    $this->balance = $balance;

                }
                private function checkSum($sum){
                    if (($sum > 1) && ($this->balance >= 0)){
                        return $sum;
                    }
                    else{
                        echo "<br>Операция невозможна";
                        return 0;
                    }
                }
                public function getBalance(){
                    return $this->balance;
                }
                public function addMoney($sum){
                    self::checkSum($sum);
                    $this->balance = $this->balance + $sum;
                    echo "<br>К балансу причислили ".$sum;
                    return $this->balance;
                }
                public function removeMoney($sum){
                    self::checkSum($sum);
                    if ($this->balance >= $sum){
                        $this->balance = $this->balance - $sum;
                        echo "<br>С баланса сняли ".$sum;
                        return $this->balance;
                    }
                    else{
                        echo "<br>Операция невозможна. Недостаточно средств.";
                        return $this->balance;
                    }
                }
            }
            
            $Bank = new BankAccount("123456");

            echo "<br>Баланс аккаунта = ".$Bank->getBalance();
            echo "<br>Баланс аккаунта = ".$Bank->addMoney(2);
            echo "<br>Баланс аккаунта = ".$Bank->removeMoney(2);
