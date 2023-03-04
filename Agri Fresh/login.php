<!-- <?php
    session_start();
?> -->


<?php
// session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM register where Email='$email' and Password ='md5($pass)'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["First_Name"]=$row['First_Name'];
        $_SESSION["Last_Name"]=$row['Last_Name']; 
        header("Location: index.php"); //new link website
    }
    else
    {
      //  echo "";
        echo '<script>alert("Invalid Email ID/Password")</script>';

    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title> login</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="signup-form">
    <form action="#" method="post" enctype="multipart/form-data">
		<h2>Login</h2>
		<p class="hint-text">Enter Login Details</p>
        <div class="form-group">

        	<input type="email" class="form-control" size="50" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">

            <input type="password" class="form-control" size="50" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="save" class="button">Login</button>
        </div>
        <br>
        <br>
        <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>
    </form>
</div>
</body>
<!-- comment  -->
<!-- <?php
header('login.php?result=failure');
?> -->



<style>
    *{
    
    font-family: sans-serif;
}
body{
     background: url('./pexels-james-frid-1750542.jpg') no-repeat;
     background-size: cover; 
     background-color: rgb(246, 250, 250); margin-left:450px;
  margin-top:100px;
  margin-right: 400px;
}
.signup-form
{
 
  border-style: solid;
  border-width: 0.1px;
  background-color: rgba(226, 230, 235, 0.836);
  border-color: rgb(0, 0, 0);
  align:center;
  padding-bottom: 50px;
  margin-right:150px ;
}
p{
  margin-left: 5px;
  padding: 5px;
}
h2{
  text-align: center;
}
input,.form-group{
  margin-left:5px;
  margin-right:5px;
  margin-bottom: 4px;
padding-bottom: 15px;
border-radius: 2px;
  width:80%;
  border: 0;

}
label{
  margin-left:0;
  margin-right:0;
  margin-bottom: 10px;
  padding:5px;
}

button
{
  margin-top:10px;
  margin-left:40%;
  padding:15px;
  width:120px;
  color:white;
  background-color: rgb(0, 110, 255);
  border-width:0px;
  border-radius:5px;
  align-items: center;
}
button:hover{
  cursor: pointer;
  background-color: rgb(42, 42, 211);

}
</style>
</html>
