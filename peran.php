<!DOCTYPE html>
<html>
    <head>
        <title>Peran</title>
    </head>
    <style>
        form {
            background-color: #1E4878;
            display: inline-block;
            border: 1px solid #ccc;
            padding: 50px;
            border-radius: 50px;
        }

        input {
            display: block;
            margin: 10px auto;
            padding: 15px;
            width: 200px;
            border-radius: 10px;
        }
    </style>
    <center>
<body>
    <h1> Peran </h1>

    <form method="POST" action="peran.php">
        <input type="button" name="nasabah" value="Nasabah"> <br>
        <input type="button" name="pengepul" value="Pengepul" onclick = "location='password.php'"><br>
        <input type="button" name="Pengelola" value="Pengelola"> <br>
        
    </form>

<?php


?>
</body>
</html>