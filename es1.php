<?php

    date_default_timezone_set("Europe/Rome");

    $mesi = array(
        1 => "gennaio",
        2 => "febbraio",
        3 => "marzo",
        4 => "aprile",
        5 => "maggio",
        6 => "giugno",
        7 => "luglio",
        8 => "agosto",
        9 => "settembre",
        10 => "ottobre",
        11 => "novembre",
        12 => "dicembre"
    );

    $dataOggi = new DateTime();

    $giorno = $dataOggi->format("d");
    $mese = $mesi[(int)$dataOggi->format("m")];
    $anno = $dataOggi->format("Y");

    echo"Oggi è il $giorno $mese $anno ";
    echo "<br>";
?>

<?php
$squadre_e_formazioni = array(
    "Juventus" => array("Portiere" => "Szczęsny", "Difensori" => array("De Ligt", "Chiellini", "Danilo", "Alex Sandro"), "Centrocampisti" => array("Bentancur", "Arthur", "Rabiot"), "Attaccanti" => array("Dybala", "Morata", "Kulusevski")),
    "Inter" => array("Portiere" => "Handanović", "Difensori" => array("De Vrij", "Škriniar", "Bastoni"), "Centrocampisti" => array("Barella", "Brozović", "Vidal"), "Attaccanti" => array("Lautaro Martínez", "Perišić")),
    "Milan" => array("Portiere" => "Donnarumma", "Difensori" => array("Hernández", "Tomori", "Kjær", "Calabria"), "Centrocampisti" => array("Kessié", "Bennacer"), "Attaccanti" => array("Rebić", "Ibrahimović", "Leão"))
);

foreach ($squadre_e_formazioni as $squadra => $formazione) {
    echo "Squadra: $squadra<br>";
    echo "Formazione:<br>";
    foreach ($formazione as $ruolo => $giocatori) {
        echo "$ruolo: ";
        if (is_array($giocatori)) {
            echo implode(", ", $giocatori);
        } else {
            echo $giocatori;
        }
        echo "</br>";
    }
    echo "<br>";
}
?>