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
    if(isset($_POST['ime_analize']) && isset($_POST['opis']) && isset($_POST['proracun'])) {
        // Priprema podataka za upis u bazu (izbegavanje SQL injection-a)
        $ime_analize = mysqli_real_escape_string($conn, $_POST['ime_analize']);
        $opis = mysqli_real_escape_string($conn, $_POST['opis']);
        $proracun = mysqli_real_escape_string($conn, $_POST['proracun']);

        // Upit za upisivanje podataka u tabelu
        $upit = "INSERT INTO analize (ime, opis, proracun) VALUES ('$ime_analize', '$opis', '$proracun')";

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
