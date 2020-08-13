<?php
$food = array('Healthy'=>
                        array('Salad', 'Vegetables', 'Pasta'),
               'Unhealthy'=>
                        array('Ice cream', 'Pizza'));

foreach($food as $element => $items) {
    echo $element.'<br>';
    foreach($items as $item ){
        echo $item.'<br>';
    }
}
?>