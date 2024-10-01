<!-- Prendere un testo abbastanza lungo, contenente diverse frasi.
Suddividere il testo in tanti paragrafi <p>: ad ogni punto corrisponde un nuovo
paragrafo. -->

<?php
$testo = "Nel primo paragrafo di questa trattazione, ci occuperemo dell'importanza del testo nel Web. Grazie ad un semplice esempio possiamo sperimentare molte cose. Per default il browser manderà a capo il contenuto di questo secondo paragrafo.";

$pieces = explode(".", $testo);
foreach ($pieces as $p) {
    echo $p;
};
?>