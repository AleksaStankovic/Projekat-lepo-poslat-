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
    
<div class="container">
    <div class="card" id="registerKarta">
        <div class="card-body">
            <h5 class="card-title">Registracija</h5>
            <form action="php/register.php" method="post" >
                <div class="form-group">
                <label for="ime">Ime:</label>
                                <input type="text" name="ime" class="form-control" placeholder="Unesite ime"
                                    required>
                             </div>
                             <div class="form-group">
                                <label for="prezime">Prezime:</label>
                                <input type="text" name="prezime" class="form-control" placeholder="Unesite prezime"
                                    required>
                             </div>
                             <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" class="form-control" placeholder="Unesite username"
                                    required>
                             </div>
                            <div class="form-group">
                             <Label for="lozinka">Lozinka:</label>
                                <input type="password" name="lozinka" class="form-control" placeholder="Unesite sifru"
                                    required>
                            </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <div class="text-center mt-3">
                <a href="index.php">Već imate nalog? Prijavite se</a>
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