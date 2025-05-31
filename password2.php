<!DOCTYPE html>
<html>
    <head>
        <title> Password </title>
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
        margin: 8px auto;
        padding: 15px;
        width: 230px;
        border-radius: 10px;
    }

    input[type = "submit"] {
        background-color: #73C2FB;
        font-size: 18px;
        font-weight: bold;
        color: #FFFFFF;
        padding: 13px;
        width: 200px;
        border-radius: 50px;
    }

</style>
<body>
    <center>
    <div class="form-box">
    <h1> Password </h1>

    <form method="POST" action="password2.php">
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
    </div>

<?php
    if (isset($_POST['submit'])) {
        $input = $_POST['password'];

        // Password yang sudah ditentukan
        $password_benar = "SmartTrash*_";

        if ($input === $password_benar) {
            header("Location: nasabah_fix.php");
            exit;
        } else {
            echo "<p style='color: red;'>Password salah ❌</p>";
        }
    }
?>

</body>
</html>