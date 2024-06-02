<?php
    // Pokretanje sesije
    session_start();

    // Provera da li je korisnik ulogovan
    if (!isset($_SESSION['korisnik_id'])) {     
        // Korisnik nije ulogovan, redirekcija na stranicu za login
        header("Location: index.php");
        exit();
    }

    // Dobijanje imena i prezimena korisnika iz baze podataka
    include 'php/konekcija.php';

    $korisnikId = $_SESSION['korisnik_id'];
    $upit = "SELECT ime, prezime FROM korisnici WHERE id = '$korisnikId'";
    $rezultat = mysqli_query($conn, $upit);
    
    if ($rezultat && mysqli_num_rows($rezultat) === 1) {
        $korisnik = mysqli_fetch_assoc($rezultat);
        $imePrezime = $korisnik['ime'] . ' ' . $korisnik['prezime'];
    } else {
        // Greška pri dobijanju podataka iz baze
        $imePrezime = 'Nepoznati korisnik';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Laboratorija</title>
</head>
<body>

<div class="container mt-5">
    <div class="card mb-3" id="custom-card"> 
        <div class="card-header">
            <h5 class="card-title text-center"><?php echo $imePrezime; ?></h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 text-center mb-3">
                    <a href="data_page.php" class="btn btn-primary me-3">Hemikalije</a>
                    <a href="eksperimenti.php" class="btn btn-primary me-3">Eksperimenti</a>
                    <a href="rezultati.php" class="btn btn-primary me-3">Rezultati</a>
                    <a href="index.php" class="btn btn-primary ">Odjava</a>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Tabela sa analizama
                        </div>
                        <div class="card-body">
                        <?php
                                // Iscitavanje podataka iz tabele analize
                                $upitAnalize = "SELECT * FROM analize";
                                $rezultatAnalize = mysqli_query($conn, $upitAnalize);

                                // Provera da li postoje podaci
                                if ($rezultatAnalize && mysqli_num_rows($rezultatAnalize) > 0) {
                                    // Postoje podaci, prikazi ih u tabeli
                                    echo "<table class='table'>";
                                    echo "<thead>";
                                    echo "<tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>Ime</th>";
                                    echo "<th>Opis</th>";
                                    echo "<th>Proracun</th>";
                                    echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    while ($red = mysqli_fetch_assoc($rezultatAnalize)) {
                                        echo "<tr>";
                                        echo "<td>" . $red['id'] . "</td>";
                                        echo "<td>" . $red['ime'] . "</td>";
                                        echo "<td>" . $red['opis'] . "</td>";
                                        echo "<td>" . $red['proracun'] . "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";
                                    echo "</table>";
                                } else {
                                    // Nema podataka, prikazi poruku
                                    echo "Nema podataka u tabeli analize.";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Forma za dodavanje novih analiza
                        </div>
                        <div class="card-body">
                            <form action="php/analize.php" method="POST">
                                <div class="mb-3">
                                    <label for="ime_analize" class="form-label">Ime analize</label>
                                    <input type="text" class="form-control" id="ime_analize" name="ime_analize">
                                </div>
                                <div class="mb-3">
                                    <label for="opis" class="form-label">Opis</label>
                                    <textarea class="form-control" id="opis" name="opis" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="proracun" class="form-label">Proracun</label>
                                    <input type="text" class="form-control" id="proracun" name="proracun">
                                </div>
                                <button type="submit" class="btn btn-primary">Dodaj</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
  body{
    background-color: rgb(109, 109, 109);
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>
