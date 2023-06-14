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
    $estados = array(
        1 => array(
            "bandeira" => "",
            "unidadefederativa" => "",
            "abreviacao" => "",
            "sededegoverno" => "",
            "area" => "",
            "populacao" => "",
            "densidade" => "",
            "PIB" => "",
            "porcentagemtotal" => "",
            "PIBpercapita" => "",
            "IDH" => "",
            "alfabetizacao" => "",
            "mortalidadeinfantil" => "",
            "expectativadevida" => ""

        ),

        );
    ?>  
    <table border="3" cellspacing= "7">
        <?php foreach($estados as $estado => $val) ?>
            <tr>
                <td><?php echo $estados[$estado]["bandeira"] ?></td>
                <td><?php echo $estados[$estado]["unidadefederativa"] ?></td>
                <td><?php echo $estados[$estado]["abreviacao"] ?></td>
                <td><?php echo $estados[$estado]["sededegoverno"] ?></td>
                <td><?php echo $estados[$estado]["area"] ?></td>
                <td><?php echo $estados[$estado]["populacao"] ?></td>
                <td><?php echo $estados[$estado]["densidade"] ?></td>
                <td><?php echo $estados[$estado]["PIB"] ?></td>
                <td><?php echo $estados[$estado]["porcentagemtotal"] ?></td>
                <td><?php echo $estados[$estado]["PIBpercapita"] ?></td>
                <td><?php echo $estados[$estado]["IDH"] ?></td>
                <td><?php echo $estados[$estado]["alfabetizacao"] ?></td>
                <td><?php echo $estados[$estado]["mortalidadeinfantil"] ?></td>
                <td><?php echo $estados[$estado]["expectativadevida"] ?></td>
            </tr>
    </table>
</body>
</html>