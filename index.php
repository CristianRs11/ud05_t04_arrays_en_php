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
        ?>
    </body>
</html>