<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        #textb{
            font-size: 28px;
            background: linear-gradient(to right, #007bff, #ff69b4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        body {
  padding: 50px;
  background-image: url("https://img.freepik.com/premium-vector/white-background-with-blue-technology-circuit_583398-369.jpg");
            background-size: cover;
}
.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 50px;
  box-shadow: 3px 3px 9px black;
}
.form-group {
  margin-bottom: 30px;
}
    </style>
</head>
<body>
    <div class="container">
        <?php
        if(isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user){
                if(password_verify($password, $user["password"])){
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
            }
       ?>
        <form action="login.php" method="post">
            <div>
                 <h1 id="textb">Focus Engineering</h1>
            </div>
           
            <div class="form-group">
                <input type="email" placeholder= "Enter Email:" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder = "Enter Password:" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
        </form>
        <div>
            <p>Not registered yet <a href="registration.php">Register Here</a></p>
        </div>
    </div>
</body>
</html>