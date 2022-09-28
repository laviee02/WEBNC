<?php
    $username = getValue("username", "POST", "str", "");
    $password = getValue("password", "POST", "str", "");
    $action = getValue("action", "POST", "str", "");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
    
    <?php
        if($_SERVER["REQUEST_METHOD"]="POST"){
            $username = check_input($_POST["username"]);

            if (!preg_match("/^[a-zA-z0-9]*$/",$username)){
                $ErrorUname = "Space and special characters not allowed but you can use underscore(_)";
            }
            else{
                $fusername = $username;
            }
            $fpassword = check_input($_POST["password"]);

            if ($ErrorUname != ""){
                $Message = "Login failed! Errors found";
            }
            else{
                include("dbConnection.php");
                $dbConnection = new dbConnection();
                $conn = $dbConnection->getConnection();
                $query = mysqli_query($conn, "select * from `demo` where name='$fusername' && password='$fpassword'");
                $num_rows = mysqli_num_rows($query);
                $row = mysqli_fetch_array($query);
            }
        }
        function check_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
        }
    ?>

<h2>Login Form</h2>

<form  method="POST">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

        <?php
            if($action == "login"){
                if ($num_rows > 0){
                    $_SESSION["logged"] = 1;
                    header("Location: dashborad.php");
                } else {
                    echo('<span>Loi dang nhap</span>');
                }
            }
        ?>
        

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required value="<?= $username ?>">

    <label for="psw"><b>Password</b></label>
    <input type="hidden" id="action" name="action" value="login">
    <input type="password" placeholder="Enter Password" name="psw" required value="<?= $password?>">
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>