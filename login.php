<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Incorrect Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="dsa.css">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h2 class="id">Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="usernameemail"> User Name or Email: </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="registration.php">Registration</a>
    <title>Login</title>
    <style>
        /* Additional styles for the admin button */
        .admin-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .admin-button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <a class="admin-button" href="monica/login.php">Admin</a>
    <!-- Rest of your login form... -->
</body>
  </body>
</html>