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
    <div class="card" id = "loginKartica">
        <div class="card-body">
            <h5 class="card-title">Prijavi se</h5>
            <form action="php/login.php" method="post" >
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Unesite username: "required> </div>
                <div class="form-group">
                    <label for="password">Lozinka</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Unesite lozinku: "required> </div>
                <button type="submit" class="btn btn-primary">Prijavi se</button>
            </form>
            <div class="text-center mt-3">
                <a href="register.php">Nemate nalog? Registrujte se</a>
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