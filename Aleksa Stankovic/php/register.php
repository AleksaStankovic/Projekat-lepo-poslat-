<?php
    include 'konekcija.php';

    // Provera da li je forma za registraciju poslata
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Prihvatanje podataka iz forme
            $ime = $_POST['ime'];
            $prezime = $_POST['prezime'];
            $username = $_POST['username'];
            $lozinka = $_POST['lozinka'];
            

        // Provera da li korisnik već postoji u bazi
            $proveraUpit = "SELECT * FROM korisnici WHERE username = '$username'";
                $proveraRezultat = mysqli_query($conn, $proveraUpit);

            if (mysqli_num_rows($proveraRezultat) > 0) {     // Korisnik već postoji, prikaži odgovarajuću poruku
                echo "Korisnik sa unetim username-om već postoji.";
            } else {  // Korisnik ne postoji, izvrši INSERT upit za dodavanje novog korisnika
                $lozinkaHash = password_hash($lozinka, PASSWORD_DEFAULT); // Heširanje lozinke

            $insertUpit = "INSERT INTO korisnici (ime, prezime, username, lozinka) VALUES
                ('$ime', '$prezime', '$username', '$lozinkaHash')";
                $rezultat = mysqli_query($conn, $insertUpit);

            if ($rezultat) {   // Uspesno registrovan korisnik
                header("Location: ../index.php?success=1");
            } else {  // Greška pri registraciji
            echo "Došlo je do greške pri registraciji.";
            }
        }
    }

    ?>

