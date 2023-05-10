<?php
$username = $_POST['name'];
$password = $_POST['password'];

if($username == "fahmi" && $password == "111"){
    echo "Login berhasil";
}  else {
    echo "Login gagal";
}