<?php 
    $num = 101;
    $result = true;

    for($i = 2; $i <$num; $i++) {
        if($num % $i == 0) {
            $result = false;
        }
    }
    echo'<b>Number </b>'.$num;
    echo'<br>';
    echo $result ? 'bilangan ini adalah bilangan prima' : 'bilangan ini bukan bilangan prima';
?>