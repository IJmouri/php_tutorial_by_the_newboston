
<?php

    $handle = fopen('name.txt', 'w');
    fwrite($handle, 'Alex'."\n");
    fwrite($handle, 'Billy');
    fclose($handle);

    echo 'Written';

?>