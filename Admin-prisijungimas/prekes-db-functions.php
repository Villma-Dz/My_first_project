<?php

// prisijungimas DB
// konstantos
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost');
define('DB_NAME', 'parduotuve');

function getPrisijungimas() {
    $prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME  );

    if ($prisijungimas == false) {
        echo "EROROR!!! Prisijungti nepavyko <br />";
        echo mysqli_connect_error()    .  "<br />";
    }
    mysqli_set_charset($prisijungimas, "utf8"); //  utf8 be "-"
    return $prisijungimas;
    // mysqli_close($prisijungimas); // atsijungti nuo DB
}
// test

//echo "Veikia <br />";

// -----------
//
function getPreke($nr){
    $manoSQL = "SELECT * FROM prekes WHERE id = '$nr'   ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL); // test Mysql objektas
    if (  $rezultatai == false ) {
        return "Klaida:  " . mysqli_error( getPrisijungimas() );
    } else {
        // is $rezultatai paimam TIK 1-na eilute(gydytoja) ir ji paverciam ARRAY
        $rezultataiArray = mysqli_fetch_row($rezultatai);
        return $rezultataiArray;
    }
}


// prekes irasymas i DB
function createPreke($pav, $nuotr, $apr, $kaina, $gam, $salis, $nuol, $poz, $ar_rodyti, $kiekis) {
    $manoSQL = "INSERT INTO prekes VALUES (NULL, '$pav', '$nuotr', '$apr', '$kaina', '$gam', '$salis', '$nuol', '$poz','$ar_rodyti','$kiekis')";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "KLAIDA, nepavyko įvesti prekės <Br />";
        echo "Klaida:  " . mysqli_error( getPrisijungimas() );
    }
}


//visu prekiu paemimas
function getPrekes($kiekis = 99999) {
    $manoSQL = "SELECT * FROM prekes
                         ORDER BY id
                         LIMIT $kiekis
                         ";
    $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);
    return $rezultatai;  // Mysql objektas, ne masyvas
}
//prekes istrynimas
function deletePreke($nr) {
    $manoSQL = "DELETE FROM prekes
                        WHERE id = '$nr'
                        LIMIT 1
                        ";
    $result = mysqli_query(getPrisijungimas(), $manoSQL);
    if ($result == false) {
        echo "KLAIDA, nepavyko istrinti prekės <Br />";
        echo "Klaida:  " . mysqli_error( getPrisijungimas() );
    }
}

// prekes redagavimas
function editPreke($nr, $pav, $nuotr, $apr, $kaina, $gam, $salis, $nuol, $poz, $ar_rodyti, $kiekis) {
    // mysqli_real_escape_string
    $keiciuSQL = "UPDATE prekes SET
                                    pavadinimas = '$pav',
                                    nuotrauka = '$nuotr',
                                    aprasymas = '$apr',
                                    kaina = '$kaina',
                                    gamintojas = '$gam',
                                    salis = '$salis',
                                    nuolaida = '$nuol',
                                    pozicija = '$poz',
                                    ar_rodyti = '$ar_rodyti',
                                    kiekis = '$kiekis'
                                WHERE
                                    id = '$nr'
                                LIMIT 1
                                ";
    $result = mysqli_query(getPrisijungimas(), $keiciuSQL);
    if ($result == false) {
        echo "Klaida:  ".mysqli_error( getPrisijungimas() );
    }
}
