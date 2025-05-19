<?php
    $num_now = 0;
    $num_next = 1;
    echo"$num_now $num_next";

    for ($i=0; $i < 5; $i++) { 
        $output = $num_now + $num_next;
        echo" $output";

        $num_now = $num_next;
        $num_next = $output;
    }
?>