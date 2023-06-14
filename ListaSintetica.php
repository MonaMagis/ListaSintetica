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
            "bandeira" =>"",
            "unidadefederativa" => "Acre",
            "abreviacao" => "AC",
            "sededegoverno" => "Rio Branco",
            "area" => "164 122,2",
            "populacao" => "795 145",
            "densidade" => "4,30",
            "PIB" => "13 622 000",
            "porcentagemtotal" => "0,2",
            "PIBpercapita" => "16 953,46",
            "IDH" => "0,663",
            "alfabetizacao" => "86,9%",
            "mortalidadeinfantil" => "17,0‰",
            "expectativadevida" => "73,9 anos"

        ),
        2 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Alagoas",
            "abreviacao" => "AL",
            "sededegoverno" => "Maceió",
            "area" => "27 767,7",
            "populacao" => "3 327 551	",
            "densidade" => "108,61",
            "PIB" => "46 364 000",
            "porcentagemtotal" => "0,8",
            "PIBpercapita" => "13 877,53",
            "IDH" => "0,631",
            "alfabetizacao" => "80,6%",
            "mortalidadeinfantil" => "19,5‰",
            "expectativadevida" => "71,6 anos"

        ),
        3 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Amapá	",
            "abreviacao" => "AP",
            "sededegoverno" => "Macapá",
            "area" => "142 814,6",
            "populacao" => "756 500",
            "densidade" => "4,16",
            "PIB" => "13 861 000",
            "porcentagemtotal" => "0,2",
            "PIBpercapita" => "18 079,54",
            "IDH" => "0,708",
            "alfabetizacao" => "95%",
            "mortalidadeinfantil" => "23,2‰",
            "expectativadevida" => "73,9 anos"

        ),
        4 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Amazonas",
            "abreviacao" => "AM",
            "sededegoverno" => "Manaus",
            "area" => "1 570 745,7",
            "populacao" => "3 893 763",
            "densidade" => "2,05",
            "PIB" => "86 560 000",
            "porcentagemtotal" => "1,4",
            "PIBpercapita" => "21 978,95",
            "IDH" => "0,674",
            "alfabetizacao" => "93,1%",
            "mortalidadeinfantil" => "18,2‰",
            "expectativadevida" => "71,9 anos"

        ),
        5 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Bahia",
            "abreviacao" => "BA",
            "sededegoverno" => "Salvador",
            "area" => "564 692,7",
            "populacao" => "15 150 143",
            "densidade" => "24,46",
            "PIB" => "245 025 000	",
            "porcentagemtotal" => "4,1",
            "PIBpercapita" => "16 115,89",
            "IDH" => "0,660",
            "alfabetizacao" => "87%",
            "mortalidadeinfantil" => "17,3‰",
            "expectativadevida" => "73,5 anos"

        ),
        6 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Ceará",
            "abreviacao" => "CE",
            "sededegoverno" => "Fortaleza",
            "area" => "148 825,6",
            "populacao" => "8 867 448",
            "densidade" => "54,40",
            "PIB" => "130 621 000",
            "porcentagemtotal" => "2,2",
            "PIBpercapita" => "14 669,14",
            "IDH" => "0,682",
            "alfabetizacao" => "84,8%",
            "mortalidadeinfantil" => "14,4‰",
            "expectativadevida" => "73,8 anos"

        ),
        7 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Distrito Federal",
            "abreviacao" => "DF",
            "sededegoverno" => "Brasília",
            "area" => "	5 822,1",
            "populacao" => "2 867 869",
            "densidade" => "400,73",
            "PIB" => "215 613 000	",
            "porcentagemtotal" => "3,6",
            "PIBpercapita" => "73 971,05",
            "IDH" => "0,824",
            "alfabetizacao" => "97,4%",
            "mortalidadeinfantil" => "10,5‰",
            "expectativadevida" => "78,1 anos"

        ),
        8 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Espírito Santo",
            "abreviacao" => "ES",
            "sededegoverno" => "Vitória",
            "area" => "46 077,5",
            "populacao" => "3 894 899",
            "densidade" => "73,97",
            "PIB" => "120 363 000",
            "porcentagemtotal" => "2",
            "PIBpercapita" => "30 627,45",
            "IDH" => "0,740",
            "alfabetizacao" => "93,8%",
            "mortalidadeinfantil" => "8,8‰",
            "expectativadevida" => "78,2 anos"

        ),
        9 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Goiás",
            "abreviacao" => "GO",
            "sededegoverno" => "Goiânia	",
            "area" => "	340 086,7",
            "populacao" => "6 551 322",
            "densidade" => "16,52",
            "PIB" => "	173 632 000",
            "porcentagemtotal" => "2,9",
            "PIBpercapita" => "26 265,32",
            "IDH" => "0,735",
            "alfabetizacao" => "93,5%",
            "mortalidadeinfantil" => "14,9‰",
            "expectativadevida" => "74,2 anos"

        ),
        10 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Maranhão",
            "abreviacao" => "MA",
            "sededegoverno" => "São Luís",
            "area" => "331 983,3",
            "populacao" => "6 861 924",
            "densidade" => "18,38",
            "PIB" => "78 475 000",
            "porcentagemtotal" => "1,3",
            "PIBpercapita" => "	11 366,23",
            "IDH" => "	0,639",
            "alfabetizacao" => "83,3%",
            "mortalidadeinfantil" => "21,3‰",
            "expectativadevida" => "70,6 anos"

        ),
        11 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Mato Grosso",
            "abreviacao" => "MT",
            "sededegoverno" => "Cuiabá",
            "area" => "903 357,9",
            "populacao" => "3 236 578",
            "densidade" => "3,10",
            "PIB" => "107 418 000",
            "porcentagemtotal" => "1,8",
            "PIBpercapita" => "32 894,96",
            "IDH" => "0,725",
            "alfabetizacao" => "93,5%",
            "mortalidadeinfantil" => "16,9‰",
            "expectativadevida" => "74,2 anos"

        ),
        12 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Mato Grosso do Sul",
            "abreviacao" => "MS",
            "sededegoverno" => "Campo Grande",
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
        13 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Minas Gerais",
            "abreviacao" => "MG",
            "sededegoverno" => "Belo Horizonte",
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
        14 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Pará",
            "abreviacao" => "PA",
            "sededegoverno" => "Belém",
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
        15 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Paraíba",
            "abreviacao" => "PB",
            "sededegoverno" => "João Pessoa	",
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
        16 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Paraná	",
            "abreviacao" => "PR",
            "sededegoverno" => "Curitiba",
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
        17 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Pernambuco",
            "abreviacao" => "PE",
            "sededegoverno" => "Recife",
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
        18 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Piauí",
            "abreviacao" => "PI",
            "sededegoverno" => "Teresina",
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
        19 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Rio de Janeiro",
            "abreviacao" => "RJ",
            "sededegoverno" => "Rio de Janeiro",
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
        20 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Rio Grande do Norte",
            "abreviacao" => "RN",
            "sededegoverno" => "Natal	",
            "area" => "52 796,8	",
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
        21 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Rio Grande do Sul",
            "abreviacao" => "RS",
            "sededegoverno" => "	Porto Alegre	",
            "area" => "281 748,5",
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
        22 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Rondônia",
            "abreviacao" => "RO",
            "sededegoverno" => "Porto Velho",
            "area" => "237 576,2",
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
        23 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Roraima	",
            "abreviacao" => "RR",
            "sededegoverno" => "Boa Vista",
            "area" => "224 299,0",
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
        24 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Santa Catarina	",
            "abreviacao" => "SC",
            "sededegoverno" => "Florianópolis	",
            "area" => "95 346,2",
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
        25 => array(
            "bandeira" =>"",
            "unidadefederativa" => "São Paulo",
            "abreviacao" => "SP",
            "sededegoverno" => "São Paulo	",
            "area" => "248 209,4",
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
        26 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Sergipe",
            "abreviacao" => "SE",
            "sededegoverno" => "Aracaju",
            "area" => "21 910,3",
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
        27 => array(
            "bandeira" =>"",
            "unidadefederativa" => "Tocantins",
            "abreviacao" => "TO",
            "sededegoverno" => "Palmas",
            "area" => "277 620,9",
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
       <table>
        <thead>
            <tr>
                <th>Bandeira</th>
                <th>Unidade federativa</th>
                <th>Abreviação</th>
                <th>Sede de governo</th>
                <th>Área (km<sup>2</sup>)</th>
                <th>População</th>
                <th>Densidade</th>
                <th>PIB (2015)</th>
                <th>(% total) (2015)</th>
                <th>PIB per capita (R$) (2015)</th>
                <th>IDH (2010)</th>
                <th>Alfabetização (2016)</th>
                <th>Mortalidade infantil (2016)</th>
                <th>Expectativade vida (2016)</th>
            </tr>
        </thead>
        <tbody>
            <?php   
            foreach($estados as $estado => $val)
            {
                echo "<tr><td>{$estados[$estado]['bandeira']}</td>";
                echo "<td>{$estados[$estado]['unidadefederativa']}</td>";
                echo "<td>{$estados[$estado]['abreviacao']}</td>";
                echo "<td>{$estados[$estado]['sededegoverno']}</td>";
                echo "<td>{$estados[$estado]['area']}</td>";
                echo "<td>{$estados[$estado]['populacao']}</td>";
                echo "<td>{$estados[$estado]['densidade']}</td>";
                echo "<td>{$estados[$estado]['PIB']}</td>";
                echo "<td>{$estados[$estado]['porcentagemtotal']}</td>";
                echo "<td>{$estados[$estado]['PIBpercapita']}</td>";
                echo "<td>{$estados[$estado]['IDH']}</td>";
                echo "<td>{$estados[$estado]['alfabetizacao']}</td>";
                echo "<td>{$estados[$estado]['mortalidadeinfantil']}</td>";
                echo "<td>{$estados[$estado]['expectativadevida']}</td></tr>";
            }
           ?>
        </tbody>
    </table>    

</body>
</html>