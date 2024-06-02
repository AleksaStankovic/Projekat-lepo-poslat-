
<?php
    // Pokretanje sesije
    session_start();
    // Provera da li je korisnik ulogovan
        if (isset($_SESSION['korisnik_id'])) {
    // Korisnik je ulogovan, odjavljivanje
        session_unset(); // Brisanje svih podataka sesije
        session_destroy(); // Uništavanje sesije
    }   
    // Redirekcija na stranicu za login
        header("Location: ../index.php");
        exit();
?>