<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
// Array contenente qualche studente
$students = [
    [
        'name' => 'Giuseppe',
        'surname' => 'Guerrieri',
        'voti' => [7, 8 ,6, 9],
    ],
    [
        'name' => 'Charles',
        'surname' => 'Leclerc',
        'voti' => [9 , 8, 10, 7],
    ],
    [
        'name' => 'Lando',
        'surname' => 'Norris',
        'voti' => [6, 7, 8, 10],
    ],

];
// Funzione per calcolare la media dei voti
function calcolaMedia($voti) {
    $somma = array_sum($voti); // Somma tutti i voti
    $numeroVoti = count($voti); // Conta quanti voti ci sono
    return $somma / $numeroVoti; // Restituisce la media
}
// Stampa il nome, cognome e la media dei voti per ciascun alunno
foreach ($students as $student) {
    $nome = $student['name'];
    $cognome = $student['surname'];
    $mediaVoti = calcolaMedia($student['voti']);

    echo "Nome: $nome, Cognome: $cognome, Media voti: " . number_format($mediaVoti, 2) . "<br>";
}
?>
