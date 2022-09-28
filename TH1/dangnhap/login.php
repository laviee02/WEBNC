<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="CS.css" type="text/css">
</head>
<body>
<div class="login-wrap">
  <div class="login-html">                                                                                                                            
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
    <label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up">
    <label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form action='login.php' method='POST'>
      <div class="sign-in-htm">
        <div class="group">
          <label for="username" class="label" >Username</label>
          <input id="username" type="text" class="input" name ="username">
        </div>
        <div class="group">
          <label for="password" class="label" >Password</label>
          <input id="password" type="password" class="input" data-type="password" name ="password">
        </div>
        </br>
        <div class="group">
          <input type="submit" class="button" name="dangnhap" value="Sign In">
        </div>
        <div class="hr"></div>
      </div>
      <?php require 'xuly.php';?>
      <form>
      <form action='login.php' method='POST'>
      <div class="sign-up-htm">
        <div class="group">
          <label for="username" class="label">Username</label>
          <input id="username" type="text" class="input" name="username">
        </div>
        <div class="group">
          <label for="password" class="label">Password</label>
          <input id="password" type="password" class="input" data-type="password" name ="password">
        </div>
        <div class="group">
          <label for="password" class="label">Phone</label>
          <input id="password" type="text" class="input" data-type="input" name="phone">
        </div>
        <div class="group">
          <label for="password" class="label">Email Address</label>
          <input id="password" type="text" class="input" name="email">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up" name="signup">
        </div>
        <div class="hr"></div>
      </div>
      <?php require 'xulysignup.php';?>
      <form>
    </div>
  </div>
</div>
</body>
</html>