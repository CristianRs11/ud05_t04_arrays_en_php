<html>
    <head>
        <meat http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Definición de arrays en PHP</h3>
        <?php
            //Array indexado
            $amigos=array("Antón","Rosalía","Xoán");
            echo "O terceiro amigo é: ".$amigos[2]."<br/>";
            //Array asociativo
            $dnisAmigos=array("Antón"=>"12345678x","Rosalía"=>"11112222x","Xoán"=>"99997777x");
            echo "O DNI de Rosalía é: ".$dnisAmigos['Rosalía']."<br/>";
            //Array de dúas dimensións:
            $cochesAmigos = array
                (
                    "Antón"=>array
                        (
                        "Fiat 500",
                        "Audi A3",
                        "Peugeot 200"
                        ),
                    "Rosalía"=>array
                        (
                        "Audi TT"
                        ),
                    "Xoan"=>array
                        (
                        "Jaguar XF",
                        "BMW 520d",
                        "Seat Ibiza"
                        )
                );
            echo "O segundo coche de Xoan é ".$cochesAmigos['Xoán'][1]."<br/>";
        ?>
    </body>
</html>