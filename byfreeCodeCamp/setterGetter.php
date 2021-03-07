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
            public $publicFood;         // bisa di akses di mana aja
            private $privateFood;       // cuma bisa di akses di class itu doang
            protected $protectedFood;   // bisa di akses di class itu doang + extended class
        
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

            // protected 
            protected function mainDish(){
                echo  "THE MAIN DISH IS MIE AYAM";
            }
        }

        // Inheritenace
        class IndonesianFood extends MyFavoriteFood{
            function getProtectedFood(){
                return $this->protectedFood;
            }

            function setProtectedFood($nValue){
                $this->protectedFood = $nValue;
            }
        }

        $myFavoriteFood = new MyFavoriteFood("sushi","bulgogi");

        // set data public
        echo $myFavoriteFood->publicFood = "martabak";

        // set data private
        $myFavoriteFood->setPrivateFood("KFC");

        // get data public
        echo $myFavoriteFood->getPrivateFood();

        // Inheritance obj
        $indonesianFood = new IndonesianFood("sate padang","soto");

        // Access data inherited
        echo $indonesianFood->publicFood;
        echo $indonesianFood->getPrivateFood();

        // set protected value
        $indonesianFood->setProtectedFood('Krabby Petty');
        echo $indonesianFood->getProtectedFood();

    ?>
</body>
</html>