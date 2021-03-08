<?php
    // var_dump($_POST);
    // var_dump($_FILES);

    $target_dir = "extfile/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    if(isset($_POST["submit"])){
        $tmp_file = $_FILES["file"]["tmp_name"];
        echo $tmp_file;
        move_uploaded_file($tmp_file,$target_file);
    }
?>