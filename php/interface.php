<?php
            interface Logger{
                public function log($message);
            }
            class FileLogger implements Logger{
                protected $file;
                public function __construct($file){
                    $this->file = $file;
                }
                public function log($message){
                   
                    $current=file_put_contents($this->file, $message, FILE_APPEND);   
                }
        }
            $logger= new FileLogger("log.txt");
            $logger->log("Это текстовое сообщение");

?>