<?php

    class Example{
        public function __construct($str)
        {
            $this -> SaySomething($str);
            
        }
        public function SaySomething($str){
            echo $str;
        }
    }
    $example = new Example('something');
?>