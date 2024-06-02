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
    if(isset($_POST['ime_hemikalije']) && isset($_POST['opis']) && isset($_POST['svojstvo'])) {
        // Priprema podataka za upis u bazu (izbegavanje SQL injection-a)
        $ime_hemikalije = mysqli_real_escape_string($conn, $_POST['ime_hemikalije']);
        $opis = mysqli_real_escape_string($conn, $_POST['opis']);
        $svojstvo = mysqli_real_escape_string($conn, $_POST['svojstvo']);

        // Upit za upisivanje podataka u tabelu
        $upit = "INSERT INTO hemikalije (ime, opis, svojstva) VALUES ('$ime_hemikalije', '$opis', '$svojstvo')";

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
