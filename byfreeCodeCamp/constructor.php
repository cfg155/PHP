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
        class mahasiswa1{
            var $id;
            var $nama;

            function __construct($nId,$nNama)
            {
                $this->id = $nId;
                $this->nama = $nNama;
            }
        }

        $louis = new mahasiswa1(123,"Louis Leonardo");
        echo $louis->id
    ?>
</body>
</html>