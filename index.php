<?php
require 'config.php';
if(($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>clinic customer welcome page</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }
  header {
    background-color:#9e1212;
    color: white;
    text-align: center;
    padding: 25px;
  }
  .container {
    width: 45%;
    background-color: white;
    margin: 70px;
    padding: 50px;
    border-radius: 100px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    display: inline-block;
    vertical-align: top;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  }
  .container:hover {
    transform: scale(1.05);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
  }
  .it-container {
    background-color: #9e1212;
    color: white;
  }
  .ece-container {
    background-color:  #9e1212;
    color: white;
  }
  .abc{
  border: 1px solid  #f1fdff;
  background:  #c0ecfa;
  transition: 1s;
  }

  
  


</style>
</head>
<body>
  <header>
    <h1>WELCOME TO DR. MIRAF MEDIUM DENTAL CLINIC</h1>
  </header>
 <div><h1>Welcome To Our CLINIC <?php echo $row["name"]; ?></h1></div> 

  <div class="container it-container">
    <h2>WELCOME TO OUR CLINIC</h2>
  <p>Welcome to DR. MIRAF MEDIUM DENTAL CLINIC We offer special treatment for our customer .</p>
    <a href="https://www.techtarget.com/searchdatacenter/definition/IT" class="hero-btn"></a>
  </div>
  
  
</body>
</html>

    
   <button class="abc"><a href="logout.php">Logout</a></button>
  </body>
</html>
