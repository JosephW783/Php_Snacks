<!-- 
PHP Snack 1:
Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60
-->

<?php
$matches = [

    [
        "casa" => "Olimpia Milano",
        "Ospiti" => "Cantù",
        "CasaPunti" => 86,
        "OspitePunti" => 74
    ],
    [
        "casa" => "Brindisi",
        "Ospiti" => "Virtus Bologna",
        "CasaPunti" => 76,
        "OspitePunti" => 82
    ],
    [
        "casa" => "Virtus Roma",
        "Ospiti" => "Venezia",
        "CasaPunti" => 86,
        "OspitePunti" => 92
    ],

]
?>

<h1>matches:</h1>
<ul>

<?php for ($i = 0; $i < count($matches); $i++) {?>
    <li>
      <?php echo $matches[$i]["casa"]. " - " . $matches[$i]["Ospiti"]?> | <?php echo $matches[$i]["CasaPunti"].  " - " . $matches[$i]["OspitePunti"]?> |
    </li>
  <?php } ?>

</ul>
   