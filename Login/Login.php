<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>DANG NHAP</title>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-uppercase text-center my-5">Form Dang Nhap</h3>
    <form action="config.php" method= "post">
        Username: <input type="text" name="username" class="form-control" required="">
        Password: <input type="password"  name="password" class="form-control" required="">
            <input type="submit" class="btn btn-block btn-info">
</form>
    </div>
  
</body>
</html>