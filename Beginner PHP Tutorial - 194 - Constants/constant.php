<?php

    class Circle{
        const pi = 3.1416;
        public function Area($radius) {
            return self::pi * $radius * $radius;
        }
    }

    $circle = new Circle;
    echo $circle -> Area(100);

?>