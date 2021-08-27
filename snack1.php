<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
    Creiamo una struttura dati che rappresenta le partite di basket
    di un’ipotetica tappa del calendario.
    Ogni array interno conterrà le seguenti informazioni:
    una squadra di casa
    una squadra ospite
    punti fatti dalla squadra di casa
    punti fatti dalla squadra ospite
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60
-->

<?php

    $partite = [
        [
            'casa'=>'Olimpia',
            'ospite'=>'Cantu',
            'casaPunti'=>'60',
            'ospitePunti'=>'55'

        ],
        [
            'casa'=>'Virtus Roma',
            'ospite'=>'Virtus Bologna',
            'casaPunti'=>'40',
            'ospitePunti'=>'20'

        ],
        [
            'casa'=>'F.C Matera',
            'ospite'=>'Inter',
            'casaPunti'=>'55',
            'ospitePunti'=>'1'

        ]
    ];

while(current($partite)){
        $kk = key($partite);
        echo ($partite[$kk]["casa"])." - ".($partite[$kk]["ospite"])." - ".($partite[$kk]["casaPunti"])." - ".($partite[$kk]["ospitePunti"]).'<br />';
        next($partite);
}


?>
        
<hr>
<!-- 
    Passare come parametri GET name, mail e age e verificare 
    (cercando i metodi che non conosciamo nella documentazione) che
    name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola
     e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->
    <h1>
        <?php 

            $name = $_GET["name"];
            $mail = $_GET["mail"];
            $age = $_GET["age"];  

            if((strlen($name)>3)&&(is_numeric( $age))&&(strpos($mail, "@")!==false)&&(strpos($mail, ".")!==false)){
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }


        ?>


    </h1>


    <hr>
<!-- 
    Creare un array di array.
    Ogni array figlio avrà come chiave una data in questo formato:
    DD/MM/YYYY (ad es 31/01/2007) e come valore un array di post associati
    a quella data.
    Stampare ogni data con i relativi post.
-->

<?php

    $posts = [
    
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                    ]
                ],
            ];
        
        
    while (current($posts)){
        $k = key($posts);
        echo $k.'<br />';
        while(current($posts[$k])){
            $k2 =  key($posts[$k]);
            while(current($posts[$k][$k2])){
                echo key($posts[$k][$k2]).'<br />';
                echo current($posts[$k][$k2]).'<br />';
                    next($posts[$k][$k2]);
            }
            next($posts[$k]);
        }
        next($posts);
    }

?>
    
<hr>


<!-- 
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà i seguenti dati:
nome
cognome
un array contenente i suoi voti scolastici
Stampare nome, cognome e la media dei voti di ogni alunno.
-->

<?php

    $alunni = [
        [
            'nome'=>'Carlo',
            'cognome'=>'Rossi',
            'voti'=>
            [
                "italiano"=> 5,
                "matematica"=> 3,
                "storia"=> 8 
            ],

        ],
        [
            'nome'=>'Simone',
            'cognome'=>'Impavido',
            'voti'=>
            [
                "italiano"=> 5,
                "matematica"=>3,
                "storia"=>8
            ],

        ],
        [
            'nome'=>'Robero',
            'cognome'=>'Carli',
            'voti'=>
            [
                "italiano"=>  5 ,
                "matematica"=> 3 ,
                "storia"=> 8 
            ],
        ]
    ];

while(current($alunni)){
        $kk = key($alunni);
        $mediaVoti = (($alunni[$kk]["voti"]["matematica"])+($alunni[$kk]["voti"]["italiano"])+($alunni[$kk]["voti"]["storia"])/3);
        echo ($alunni[$kk]["nome"])." - ".($alunni[$kk]["cognome"])." - "."Media Voti:".($mediaVoti).'<br />';
        next($alunni);
}


?>
    
</body>
</html>
