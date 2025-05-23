<!DOCTYPE html>
<html>
    <head>
        <title> Register </title>
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

        input[type = "button"] {
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

        .error {
            color: #FF0000;
        }

        .succes {
            color: #29AB87;
        }
    </style>
    <center>
<body>
    <h1> Register </h1>
        
    <form method="register.php" action="POST">
        <input type="username" name="username" placeholder="Username" required> <br>
        <input type="password" value=" Set Password" required>
        <label>Already have an account? <a href="index.php"><u>Login</u></a></label><br><br>
        <input type="button" value="Continue" onlick = "location='peran.php'" /> 

    </form>

<?php


?>
</body>
</html>