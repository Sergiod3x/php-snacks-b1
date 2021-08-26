<!-- 
    Passare come parametri GET name, mail e age e verificare 
    (cercando i metodi che non conosciamo nella documentazione) che
    name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola
     e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

            Var_dump(strlen($name));




            // $text = "A very long wooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooord. and something";
            // $torf = $_GET["torf"];
            // if($torf === "true"){
            //     $torf = true;
            // } else{
            //     $torf= false;
            // }
            // $newtext = wordwrap($text, 3, "\n", $torf);

            // echo "$newtext\n";

            
            // echo "<br/> $torf";

            // $array = ["casa",5, "maiale"];

            // Var_dump($array);


        ?>


    </h1>

    <hr>


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


foreach ($posts as $v1) {
    foreach ($v1 as $v2) {
        echo key($v1);
        
     
}
?>
    
    
</body>
</html>



<!-- 
// // Tramite la get è possibile decidere se raggruppare i caratteri a gruppi di tre

// $partite = [
//     [
//         "casa"=>"Olimpia",
//         "ospite"=>"Cantu",
//         "casaPunti"=>"60",
//         "ospitePunti"=>"55",

//     ],
//     [
//         "casa"=>"Virtus Roma",
//         "ospite"=>"Virtus Bologna",
//         "casaPunti"=>"40",
//         "ospitePunti"=>"20",

//     ],
//     [
//         "casa"=>"F.C Matera",
//         "ospite"=>"Inter",
//         "casaPunti"=>"55",
//         "ospitePunti"=>"1",

//     ]
// ]

// for($1 = 0; $1 < count($partite); $i++){
//     $string = $partite[$i]["casa"].$partite[$i]["ospite"].$partite[$i]["casaPunti"].$partite[$i]["ospitePunti"];
// }

// echo $string;
// // Var_dump($array);

// Tramite la get è possibile decidere se raggruppare i caratteri a gruppi di tre -->