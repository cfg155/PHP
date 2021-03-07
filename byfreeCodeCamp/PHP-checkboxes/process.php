<?php
    $boxes = $_POST["box"];
    echo $boxes[1]."</br>";

    foreach ($boxes as $item){
        echo $item;
    }
?>