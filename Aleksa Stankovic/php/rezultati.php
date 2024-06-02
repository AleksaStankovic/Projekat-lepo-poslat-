<?php
    // Pokretanje sesije
    session_start();

    // Provera da li je korisnik ulogovan
    if (!isset($_SESSION['korisnik_id'])) {     
        // Korisnik nije ulogovan, redirekcija na stranicu za login
        header("Location: index.php");
        exit();
    }

    // Dobijanje konekcije na bazu
    include 'konekcija.php';

    // Provera da li su svi potrebni podaci poslati iz forme
    if(isset($_POST['ime_rezultata']) && isset($_POST['opis']) && isset($_POST['zakljucak'])) {
        // Priprema podataka za upis u bazu (izbegavanje SQL injection-a)
        $ime_rezultata = mysqli_real_escape_string($conn, $_POST['ime_rezultata']);
        $opis = mysqli_real_escape_string($conn, $_POST['opis']);
        $zakljucak = mysqli_real_escape_string($conn, $_POST['zakljucak']);

        // Upit za upisivanje podataka u tabelu
        $upit = "INSERT INTO rezultati (ime, opis, zakljucak) VALUES ('$ime_rezultata', '$opis', '$zakljucak')";

        // Izvršavanje upita
        if(mysqli_query($conn, $upit)) {
            // Uspešno upisani podaci
            echo "Podaci su uspešno upisani u bazu.";
        } else {
            // Greška pri upisu podataka
            echo "Greška: " . mysqli_error($conn);
        }
    } else {
        // Poruka ako nisu poslati svi potrebni podaci
        echo "Molimo popunite sva polja.";
    }
?>
