<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
(ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.

<?php

$Posts = [
    '01/10/2024' => [
        [
            'titolo' => 'post numero 1',
            'autore' => 'Valentino Rossi',
            'text' => 'Testo prova 1'
        ],
        [
            'titolo' => 'post numero 2',
            'autore' => 'Valentino Rossi',
            'text' => 'Testo prova 2'
        ],
        

    ],
    '02/10/2024' => [
        [
            'titolo' => 'post numero 3',
            'autore' => 'Valentino Rossi',
            'text' => 'testo prova 3'
        ],
        [
            'titolo' => 'post numero 4',
            'autore' => ' Valentino Rossi',
            'text' => 'testo prova 4'

        ],
    ],
    [
     '03/10/2024' => [
            'titolo' => 'post numero 5',
            'autore' => ' Valentino Rossi ',
            'text' => 'testo prova 3'
     ],
    ],
    


    ];

    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
   </head>
   <body>
      <?php foreach($Posts as $date => $post) { ?>
         <h1><?php echo $date ?></h1>
         <?php foreach($post as $p) { ?>
            <ul>
               <?php foreach ($p as $key => $value) { ?>
                  <li>
                     <b><?php echo $key ?></b>
                     <span><?php echo $value ?></span>
                  </li>
               <?php } ?>
            </ul>
         <?php } ?>
      <?php } ?>


   </body>
</html>