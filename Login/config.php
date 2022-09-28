<?php
// khai báo biến username
$username = $_POST['username'];
//khai báo biến password
$password = $_POST['password'];

// khởi tạo kết nối
$conn = new mysqli('localhost', 'root', 'admin', 'login');
$sql = "SELECT * FROM demo WHERE username = '$username'";
$result = $conn->query($sql)->fetch_assoc();

if($result['password'] == $password){
    header('Location: http://localhost/Webnc/Login/Login.php');
} else {
    echo'Kết nối không thành công';
}
//Kiểm tra kết nối
$conn->close();

?>