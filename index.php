<?php
include ("footer.php");
include ("koneksi.php");

session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // sebaiknya sudah di-hash

    $query = "SELECT * FROM pengguna WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['login'] = true;
        $_SESSION['user'] = mysqli_fetch_assoc($result);
        header("Location: tabel1.php");
        exit;
    } else {
        $error = "Email atau password salah!";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Log in </title>
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

        input[type = "Button"] {
            background-color: #73C2FB;
            font-size: 20px;
            font-weight: bold;
            color: #FFFFFF;
            padding: 15px;
            width: 250px;
            border-radius: 50px;
        }

        label {
            font-size: 15px;
            color: #FFFFFF;
        }

        label a {
            color: #FFFFFF;
        }

        .line-container {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
        }

        .line-container hr {
            flex: 1;
            border: none;
            height: 1px;
            background-color: #ccc;
        }

        .line-container span {
            padding: 0 10px;
            font-size: 17px;
            color: #FFFFFF;
        }

        .google-button {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 500;
            background-color: white;
            cursor: pointer;
            margin: auto;
            width: fit-content;
        }

        .google-button img {
            height: 20px;
            margin-right: 10px;
        }

        .error {
            color: #FF0000;
        }

        .succes {
            color: #29AB87;
        }
    </style>
    <center>
<body>
    <h1> Log in </h1>
        
    <form method="POST" action="">
        <input type="text" name="email" placeholder="Email" required> <br>
        <input type="password" name="password" placeholder="Password">
        <label> Don't have an acoount yet? <a href= "register.php" ><u>Register</u></a></label><br><br>
        <input type="button" name="login" value="Login" onlick = "location='peran.php'" /> 
        
    </form>

<?php

?>
</body>
</html>