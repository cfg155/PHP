<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Louis Leonardo";
        echo strtolower($name).'</br>';  //bikin semua jadi lower case
        echo strtoupper($name).'</br>'; // bkin semua jadi uppercase
        echo strlen($name).'</br>'; // panjang length dari string
        echo $name[0].'</br>'; //print index dari string
        echo str_replace("Louis","Jacob",$name).'</br>'; //params : nama yang dicari, jadi apa, variabel apa
        echo substr($name,5,4).'</br>'; //substring buat motong string | params : variabel,motong berapa, baca berapa

    ?>
</body>
</html>