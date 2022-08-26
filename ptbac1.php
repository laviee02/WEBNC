<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Căn bậc 1</title>
</head>
<body>
<?php
// khai báo các biến toàn cầu
$heso_a = "";
$heso_b = "";

// đọc các hệ số từ FORM
if (isset ( $_POST ['heso_a'] )) {
    $heso_a = $_POST ['heso_a'];
}
if (isset ( $_POST ['heso_b'] )) {
    $heso_b = $_POST ['heso_b'];
}

function giaiPTB1($a, $b) {
     // kiểm tra biến đầu vào
     if ($a == "")
     $a = 0;
    if ($b == "")
        $b = 0;

    // in phương trình ra màn hình
    echo "Phương trình: " . $a . "x + " . $b . " = 0";
    echo "<br>";
    // kiểm tra các hệ số
    if ($a == 0) {
    echo ( 'Số a phải nhập khác 0');
    }
    else{
        echo ("Phương trình có nghiệm là".(-($b) / $a) );
    }
}
?>
<form action="#" method="post">
 <table>
  <tr>
   <td>Hệ số a</td>
   <td><input type="text" name="heso_a" value="<?=$heso_a?>" /></td>
  </tr>
  <tr>
   <td>Hệ số b</td>
   <td><input type="text" name="heso_b" value="<?=$heso_b?>" /></td>
  </tr>
  <tr>
   <td><input type="submit" value="Kết quả"></td>
  </tr>
 </table>
</form>
<br>
<?php

// Sử dụng từ kháo $GLOBALS để đọc các biến toàn cầu và truyền vào hàm
if (is_numeric ( $GLOBALS ['heso_a'] ) && is_numeric ( $GLOBALS ['heso_b'] )) {
    giaiPTB1 ( $GLOBALS ['heso_a'], $GLOBALS ['heso_b'] );
}

?>
</body>
</html>