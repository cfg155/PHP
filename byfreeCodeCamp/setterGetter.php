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
        class MyFavoriteFood{
            // bisa ada access modifier kyk java public, protected, ama private
            public $publicFood;
            private $privateFood;
        
            function __construct($nPublicFood,$nPrivateFood)
            {
                $this->publicFood = $nPublicFood;
                $this->privateFood = $nPrivateFood;
            }

            // setter getter utk private
            function getPrivateFood(){
                return $this->privateFood;
            }

            function setPrivateFood($nValue){
                $this->privateFood = $nValue;
            }
        }

        $myFavoriteFood = new MyFavoriteFood("sushi","nasi");

        // set data public
        echo $myFavoriteFood->publicFood = "martabak";

        // set data private
        $myFavoriteFood->setPrivateFood("Ayam Goreng");

        // get data public
        echo $myFavoriteFood->getPrivateFood();

    ?>
</body>
</html>