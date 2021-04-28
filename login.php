<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
</head>
<body>
    <h3>Kreiranje sesije</h3>
    <form action="login.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="email" id="email" placeholder="Unesite email"><br><br>
        <input type="password" name="lozinka" id="lozinka" placeholder="Unesite lozinku"><br><br>
        <button type="submit" name="dugme">Kreiraj sesiju</button><br><br>
    </form>

    <?php
        if(isset($_POST['dugme'])) {
            $email=$_POST['email'];
            $lozinka=$_POST['lozinka'];
            if($email!="" and $lozinka!="") {
                $_SESSION['email']=$email;
                $_SESSION['lozinka']=$lozinka;
                header("Location: stranica.php");
            } else {
                echo "Svi podaci su obavezni.";
            }
        } else {
            echo "Unesite podatke koji ce biti sacuvani u sesiji.";
        }
    ?>
</body>
</html>