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

<?php
$partite_e_formazioni = array(
    array(
        "squadra_casa" => "Juventus",
        "formazione_casa" => array("Portiere" => "Szczęsny", "Difensori" => array("De Ligt", "Chiellini", "Danilo", "Alex Sandro"), "Centrocampisti" => array("Bentancur", "Arthur", "Rabiot"), "Attaccanti" => array("Dybala", "Morata", "Kulusevski")),
        "squadra_fuori_casa" => "Inter",
        "formazione_fuori_casa" => array("Portiere" => "Handanović", "Difensori" => array("De Vrij", "Škriniar", "Bastoni"), "Centrocampisti" => array("Barella", "Brozović", "Vidal"), "Attaccanti" => array("Lautaro Martínez", "Perišić"))
    ),
    array(
        "squadra_casa" => "Milan",
        "formazione_casa" => array("Portiere" => "Donnarumma", "Difensori" => array("Hernández", "Tomori", "Kjær", "Calabria"), "Centrocampisti" => array("Kessié", "Bennacer"), "Attaccanti" => array("Rebić", "Ibrahimović", "Leão")),
        "squadra_fuori_casa" => "Napoli",
        "formazione_fuori_casa" => array("Portiere" => "Ospina", "Difensori" => array("Di Lorenzo", "Rrahmani", "Manolas", "Ghoulam"), "Centrocampisti" => array("Fabian Ruiz", "Demme", "Zielinski"), "Attaccanti" => array("Insigne", "Mertens"))
    )
);

foreach ($partite_e_formazioni as $partita) {
    if (isset($partita['squadra_casa']) && isset($partita['squadra_fuori_casa'])) {
        echo "Partita: " . $partita['squadra_casa'] . " vs " . $partita['squadra_fuori_casa'] . "<br>";
    }

    if (isset($partita['formazione_casa'])) {
        echo "Formazione " . $partita['squadra_casa'] . ":<br>";
        foreach ($partita['formazione_casa'] as $ruolo => $giocatori) {
            echo "$ruolo: ";
            if (is_array($giocatori)) {
                echo implode(", ", $giocatori);
            } else {
                echo $giocatori;
            }
            echo "<br>";
        }
        echo "<br>";
    }

    if (isset($partita['formazione_fuori_casa'])) {
        echo "Formazione " . $partita['squadra_fuori_casa'] . ":<br>";
        foreach ($partita['formazione_fuori_casa'] as $ruolo => $giocatori) {
            echo "$ruolo: ";
            if (is_array($giocatori)) {
                echo implode(", ", $giocatori);
            } else {
                echo $giocatori;
            }
            echo "<br>";
        }
        echo "<br>";
    }
}
?>

