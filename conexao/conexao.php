<?php
$server= 'localhost';
$user= 'root';
$senha= '';
$banco= 'cadastro';

$conn= mysqli_connect($server, $user, $senha, $banco);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>