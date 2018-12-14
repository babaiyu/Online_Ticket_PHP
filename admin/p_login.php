<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('014');

$user = $_POST['username'];
$pass = $_POST['password'];

$u = mysql_real_escape_string($user);
$p = mysql_real_escape_string($pass);

$sql = mysql_query('select * from admin where username="'.$u.'" and password="'.$p.'" ');
$al = mysql_num_rows($sql);

if($al == 1) {
    session_start();
    $_SESSION['admin']=$user;
    echo "<script>window.alert('Selamat, ADMIN!!');window.location.href='index.php';</script>";
} else {
    echo "<script>window.alert('Gagal Sign In!!');window.location.href='login.php';</script>";
}
