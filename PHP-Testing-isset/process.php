<?php
// bisa pake ini
    if(isset($_POST["submit"])){
        echo $_POST["name"];
    }
// bisa pake ini juga
    if(!empty($_POST["submit"])){
        echo $_POST["name"];
    }
?>