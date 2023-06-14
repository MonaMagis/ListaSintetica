<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintética</title>
    <style>
        table{
            font-family: "Comic Sans MS", cursive, sans-serif;
            border: 2px solid #94857B;
            background-color: #F6F3EE;
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }
        td, table{
            border: 1px solid #AB9685;
            padding: 3px 2px;
        }
        tbody td, th {
            font-size: 19px;
            font-weight: bold;
            color: #AB9685;
        }
        tr:nth-child(even) {
            background: #EBDED4;
        }
    </style>
</head>
<body>
    <header>
        <h2>Lista Sintética</h2>
    </header>
    <?php
    $estados = array(
        1 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Bandeira do Acre" width = "50">',
            'unidadefederativa' => 'Acre',
            'abreviacao' => 'AC',
            'sededegoverno' => 'Rio Branco',
            'area' => '164 122,2',
            'populacao' => '795 145',
            'densidade' => '4,30',
            'PIB' => '13 622 000',
            'porcentagemtotal' => '0,2',
            'PIBpercapita' => '16 953,46',
            'IDH' =>'0,663',
            'alfabetizacao' => '86,9%',
            'mortalidadeinfantil'=> '17,0‰',
            'expectativadevida' => '73,9 anos'

        ),
        2 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="Bandeira de Alagoas" width = "50">',
            'unidadefederativa' => 'Alagoas',
            'abreviacao' => 'AL',
            'sededegoverno' =>'Maceió',
            'area' => '27 767,7',
            'populacao' => '3 327 551	',
            'densidade' => '108,61',
            'PIB' => '46 364 000',
            'porcentagemtotal' => '0,8',
            'PIBpercapita' => '13 877,53',
            'IDH' => '0,631',
            'alfabetizacao' => '80,6%',
            'mortalidadeinfantil' => '19,5‰',
            'expectativadevida' => '71,6 anos'

        ),
        3 => array(
            'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amapá.svg" alt="Bandeira do Amapá" width = "50">',
            'unidadefederativa' => 'Amapá	',
            'abreviacao' => 'AP',
            'sededegoverno' => 'Macapá',
            'area' => '142 814,6',
            'populacao' => '756 500',
            'densidade' => '4,16',
            'PIB' => '13 861 000',
            'porcentagemtotal' => '0,2',
            'PIBpercapita' => '18 079,54',
            'IDH' => '0,708',
            'alfabetizacao' => '95%',
            'mortalidadeinfantil' => '23,2‰',
            'expectativadevida' => '73,9 anos'

        ),
        4 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg" alt="Bandeira do Amazonas" width = "50">',
            'unidadefederativa' => 'Amazonas',
            'abreviacao' => 'AM',
            'sededegoverno' => 'Manaus',
            'area' => '1 570 745,7',
            'populacao' => '3 893 763',
            'densidade' => '2,05',
            'PIB' => '86 560 000',
            'porcentagemtotal' => '1,4',
            'PIBpercapita' => '21 978,95',
            'IDH' => '0,674',
            'alfabetizacao' => '93,1%',
            'mortalidadeinfantil' => '18,2‰',
            'expectativadevida' => '71,9 anos'

        ),
        5 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg" alt="Bandeira da Bahia" width = "50">',
            'unidadefederativa' => 'Bahia',
            'abreviacao' => 'BA',
            'sededegoverno' => 'Salvador',
            'area' => '564 692,7',
            'populacao' => '15 150 143',
            'densidade' => '24,46',
            'PIB' => '245 025 000',
            'porcentagemtotal' => '4,1',
            'PIBpercapita' => '16 115,89',
            'IDH' => '0,660',
            'alfabetizacao' => '87%',
            'mortalidadeinfantil' => '17,3‰',
            'expectativadevida' => '73,5 anos'

        ),
        6 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Ceará.svg" alt="Bandeira do Ceará" width = "50">',
            'unidadefederativa' => 'Ceará',
            'abreviacao' => 'CE',
            'sededegoverno' => 'Fortaleza',
            'area' => '148 825,6',
            'populacao' => '8 867 448',
            'densidade' => '54,40',
            'PIB' => '130 621 000',
            'porcentagemtotal' => '2,2',
            'PIBpercapita' => '14 669,14',
            'IDH' => '0,682',
            'alfabetizacao' => '84,8%',
            'mortalidadeinfantil' => '14,4‰',
            'expectativadevida' => '73,8 anos'

        ),
        7 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg" alt="Bandeira do Distrito Federal" width = "50">',
            'unidadefederativa' => 'Distrito Federal',
            'abreviacao' => 'DF"',
            'sededegoverno' => 'Brasília',
            'area' => '	5 822,1',
            'populacao' => '2 867 869',
            'densidade' => '400,73',
            'PIB' => '215 613 000	',
            'porcentagemtotal' => '3,6',
            'PIBpercapita' => '73 971,05',
            'IDH' => '0,824',
            'alfabetizacao' => '97,4%',
            'mortalidadeinfantil' => '10,5‰',
            'expectativadevida' => '78,1 anos'

        ),
        8 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Espírito_Santo.svg" alt="Bandeira do Espírito Santo" width = "50"',
            'unidadefederativa' => 'Espírito Santo',
            'abreviacao' => 'ES',
            'sededegoverno' => 'Vitória',
            'area' => '46 077,5',
            'populacao' => '3 894 899',
            'densidade' => '73,97',
            'PIB' => '120 363 000',
            'porcentagemtotal' => '2',
            'PIBpercapita' => '30 627,45',
            'IDH' =>'"0,740',
            'alfabetizacao' => '93,8%',
            'mortalidadeinfantil' => '8,8‰',
            'expectativadevida' => '78,2 anos'

        ),
        9 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goiás.svg" alt="Bandeira de Goiás" width = "50"',
            'unidadefederativa' => 'Goiás',
            'abreviacao' => 'GO',
            'sededegoverno' => 'Goiânia	',
            'area' => '	340 086,7',
            'populacao' => '6 551 322',
            'densidade' => '16,52',
            'PIB' => '173 632 000',
            'porcentagemtotal' => '2,9',
            'PIBpercapita' => '26 265,32',
            'IDH' => '0,735',
            'alfabetizacao' => '93,5%',
            'mortalidadeinfantil' => '14,9‰',
            'expectativadevida' => '74,2 anos'

        ),
        10 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranhão.svg" alt="Bandeira do Maranhão" width = "50">',
            'unidadefederativa' => 'Maranhão',
            'abreviacao' => 'MA',
            'sededegoverno' => 'São Luís',
            'area' => '331 983,3',
            'populacao' => '6 861 924',
            'densidade' => '18,38',
            'PI' => '78 475 000',
            'porcentagemtotal' => '1,3',
            'PIBpercapita' => '11 366,23',
            'IDH' => '0,639',
            'alfabetizacao' => '83,3%',
            'mortalidadeinfantil' => '21,3‰',
            'expectativadevida' => '70,6 anos'

        ),
        11 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg" alt="Bandeira do Mato Grosso" width = "50">',
            'unidadefederativa' => 'Mato Grosso',
            'abreviacao' => 'MT',
            'sededegoverno' => 'Cuiabá',
            'area' => '903 357,9',
            'populacao' => '3 236 578',
            'densidade' => '3,10',
            'PIB' => '107 418 000',
            'porcentagemtotal'=> '1,8',
            'PIBpercapita' => '32 89.,96',
            'IDH' => '0,725',
            'alfabetizacao' => '93,5%',
            'mortalidadeinfantil' => '16,9‰',
            'expectativadevida' => '74,2 anos'

        ),
        12 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg" alt="Bandeira do Mato Grosso do Sul" width = "50">',
            'unidadefederativa' => 'Mato Grosso do Sul',
            'abreviacao' => 'MS',
            'sededegoverno' => 'Campo Grande',
            'area' => '357 125,0',
            'populacao' => '2 630 098',
            'densidade' => '6,34',
            'PIB' => '83 082 000',
            'porcentagemtotal'=> '1,4',
            'PIBpercapita' => '	31 337,22',
            'IDH' => '0,729',
            'alfabetizacao' => '93,7%',
            'mortalidadeinfantil' => '	14,0‰',
            'expectativadevida' => '77,2 anos'

        
        ),
        13 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg" alt="Bandeira de Minas Gerais" width = "50"',
            'unidadefederativa' => 'Minas Gerais',
            'abreviacao' => 'MG',
            'sededegoverno' => '	Belo Horizonte',
            'area' => '586 528,3',
            'populacao' => '	20 777 672',
            'densidade' => '32,79',
            'PIB' => '519 326 000',
            'porcentagemtotal'=> '8,7',
            'PIBpercapita' => '24 884,94',
            'IDH' => '	0,731',
            'alfabetizacao' => '93,8%',
            'mortalidadeinfantil' => '10,9‰',
            'expectativadevida' => '72,1 anos'

        ),
        14 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Pará.svg" alt="Bandeira do Pará" width = "50">',
            'unidadefederativa' => 'Pará',
            'abreviacao' => 'PA',
            'sededegoverno' => '	Belém',
            'area' => '1 247 689,5',
            'populacao' => '8 101 180',
            'densidade' => '5,58',
            'PIB' => '130 883 000',
            'porcentagemtotal'=> '2,2',
            'PIBpercapita' => '16 009,98',
            'IDH' => '0,646',
            'alfabetizacao' => '90,7%',
            'mortalidadeinfantil' => '16,6‰',
            'expectativadevida' => '72,1 anos'

        ),
        15 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Paraíba.svg" alt="Bandeira da Paraíba" width = "50">',
            'unidadefederativa' => 'Paraíba',
            'abreviacao' => 'PB',
            'sededegoverno' => 'João Pessoa',
            'area' => '56 439,8',
            'populacao' => '3 950 359	',
            'densidade' => '63,71',
            'PIB' => '56 140 000',
            'porcentagemtotal'=> '0,9',
            'PIBpercapita' => '	14 133,32',
            'IDH' => '0,658',
            'alfabetizacao' => '83,7%',
            'mortalidadeinfantil' => '16,1‰',
            'expectativadevida' => '73,2 anos'

        ),
        16 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paraná.svg" alt="Bandeira do Paraná" width = "50"',
            'unidadefederativa' => 'Paraná',
            'abreviacao' => 'PR',
            'sededegoverno' => '	Curitiba',
            'area' => '199 314,9',
            'populacao' => '11 112 062',
            'densidade' => '51,48',
            'PIB' => '376 960 000',
            'porcentagemtotal'=> '6,3',
            'PIBpercapita' => '33 768,62',
            'IDH' => '0,749	',
            'alfabetizacao' => '95,5%',
            'mortalidadeinfantil' => '9,3‰',
            'expectativadevida' => '77,1 anos'

        ),
        17 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg" alt="Bandeira de Pernambuco" width = "50">',
            'unidadefederativa' => 'Pernambuco',
            'abreviacao' => 'PE',
            'sededegoverno' => 'Recife',
            'area' => '98 311,6',
            'populacao' => '9 297 861	',
            'densidade' => '85,58',
            'PIB' => '156 955 000',
            'porcentagemtotal'=> '2,6',
            'PIBpercapita' => '16 795,34',
            'IDH' => '0,673',
            'alfabetizacao' => '87,2%',
            'mortalidadeinfantil' => '12,7‰',
            'expectativadevida' => '73,9 anos'

        ),
        18 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piauí.svg" alt="Bandeira do Piauí" width = "50">',
            'unidadefederativa' => 'Piauí',
            'abreviacao' => 'PI',
            'sededegoverno' => 'Teresina',
            'area' => '251 529,2',
            'populacao' => '3 198 185',
            'densidade' => '11,95',
            'PIB' => '39 148 000',
            'porcentagemtotal'=> '0,7',
            'PIBpercapita' => '12 218,51',
            'IDH' => '0,646',
            'alfabetizacao' => '82,8%',
            'mortalidadeinfantil' => '19,1‰',
            'expectativadevida' => '71,1 anos'

        ),
        19 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg" alt="Bandeira do Rio de Janeiro" width = "50">',
            'unidadefederativa' => 'Rio de Janeiro',
            'abreviacao' => 'RJ',
            'sededegoverno' => 'Rio de Janeiro',
            'area' => '43 696,1',
            'populacao' => '16 497 395',
            'densidade' => '352,05',
            'PIB' => '659 137 000',
            'porcentagemtotal'=> '11',
            'PIBpercapita' => '39 826,95',
            'IDH' => '0,761',
            'alfabetizacao' => '97,3%',
            'mortalidadeinfantil' => '11,5‰',
            'expectativadevida' => '76,2 anos'

        ),
        20 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg" alt="Bandeira do Rio Grande do Norte" width = "50">',
            'unidadefederativa' => 'Rio Grande do Norte',
            'abreviacao' => 'RN',
            'sededegoverno' => 'Natal',
            'area' => '52 796,8',
            'populacao' => '3 419 550',
            'densidade' => '56,88	',
            'PIB' => '57 250 000',
            'porcentagemtotal'=> '1',
            'PIBpercapita' => '16 631,86',
            'IDH' => '0,684',
            'alfabetizacao' => '85,3%',
            'mortalidadeinfantil' => '14,7‰',
            'expectativadevida' => '75,7 anos'

        ),
        21 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg" alt="Bandeira do Rio Grande do Sul" width = "50">',
            'unidadefederativa' => 'Rio Grande do Sul',
            'abreviacao' => 'RS',
            'sededegoverno' => 'Porto Alegre',
            'area' => '281 748,5',
            'populacao' => '11 228 091',
            'densidade' => '	38,49',
            'PIB' => '381 985 000',
            'porcentagemtotal'=> '6,4',
            'PIBpercapita' => '33 960,36',
            'IDH' => '0,746',
            'alfabetizacao' => '96,8%',
            'mortalidadeinfantil' => '9,6‰',
            'expectativadevida' => '77,8 anos'

        ),
        22 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rondônia.svg" alt="Bandeira de Rondônia" width = "50">',
            'unidadefederativa' => 'Rondônia',
            'abreviacao' => 'RO',
            'sededegoverno' => 'Porto Velho',
            'area' => '237 576,2',
            'populacao' => '1 755 015',
            'densidade' => '6,46',
            'PIB' => '	36 563 000	',
            'porcentagemtotal'=> '0,6',
            'PIBpercapita' => '20 677,95',
            'IDH' => '0,690',
            'alfabetizacao' => '93,3%',
            'mortalidadeinfantil' => '20,0‰',
            'expectativadevida' => '	71,3 anos'

        ),
        23 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg" alt="Bandeira de Roraima" width = "50">',
            'unidadefederativa' => 'Roraima',
            'abreviacao' => 'RR',
            'sededegoverno' => '	Boa Vista',
            'area' => '224 299,0',
            'populacao' => '500 826',
            'densidade' => '	1,74',
            'PIB' => '	10 354 000',
            'porcentagemtotal'=> '0,2',
            'PIBpercapita' => '20 476,71',
            'IDH' => '0,707',
            'alfabetizacao' => '93,4%',
            'mortalidadeinfantil' => '17,2‰',
            'expectativadevida' => '71,5 anos'

        ),
        24 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg" alt="Santa Catarina" width = "50">',
            'unidadefederativa' => 'Santa Catarina',
            'abreviacao' => 'SC',
            'sededegoverno' => 'Florianópolis',
            'area' => '95 346,2',
            'populacao' => '6 734 568',
            'densidade' => '61,53',
            'PIB' => '	249 073 000	',
            'porcentagemtotal'=> '4,2',
            'PIBpercapita' => '36 525,28',
            'IDH' => '0,774',
            'alfabetizacao' => '97,2%',
            'mortalidadeinfantil' => '	9,2‰',
            'expectativadevida' => '79,1 anos'

        
        ),
        25 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_São_Paulo.svg" alt="São Paulo" width = "50">',
            'unidadefederativa' => 'São Paulo',
            'abreviacao' => 'SP',
            'sededegoverno' => 'São Paulo',
            'area' => '248 209,4',
            'populacao' => '44 169 350	',
            'densidade' => '162,93',
            'PIB' => '1 939 890 000',
            'porcentagemtotal'=> '32,4',
            'PIBpercapita' => '43 694,68',
            'IDH' => '0,783',
            'alfabetizacao' => '97,2%',
            'mortalidadeinfantil' => '9,9‰',
            'expectativadevida' => '78,1 anos'

        ),
        26 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg" alt="Bandeira de Sergipe" width = "50">',
            'unidadefederativa' => 'Sergipe',
            'abreviacao' => 'SE',
            'sededegoverno' => 'Aracaju',
            'area' => '21 910,3',
            'populacao' => '2 227 294	',
            'densidade' => '89,81',
            'PIB' => '38 554 000',
            'porcentagemtotal'=> '0,6',
            'PIBpercapita' => '	17 189,28',
            'IDH' => '0,665',
            'alfabetizacao' => '85,3%',
            'mortalidadeinfantil' => '	16,2‰',
            'expectativadevida' => '72,7 anos'

        ),
        27 => array(
            'bandeira' =>'<img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg" alt="Bandeira do Tocantins" width = "50"',
            'unidadefederativa' => 'Tocantins',
            'abreviacao' => 'TO',
            'sededegoverno' => 'Palmas',
            'area' => '277 620,9',
            'populacao' => '1 502 759',
            'densidade' => '4,70',
            'PIB' => '28 930 000',
            'porcentagemtotal'=> '0,5',
            'PIBpercapita' => '	19 094,16',
            'IDH' => '0,699',
            'alfabetizacao' => '89,6%',
            'mortalidadeinfantil' => '15,8‰',
            'expectativadevida' => '73,4 anos'
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
        <tfoot>
        </tfoot>
    </table>    

</body>
</html>