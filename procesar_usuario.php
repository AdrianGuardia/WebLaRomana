<?php
# Entrada
$c = $_POST["correo"];
$p1 = $_POST["password1"];
$n = $_POST["nombres"];
$a = $_POST["apellidos"];
$fn = $_POST["fn"];

# Proceso
$pas = sha1($p1);
$db = new PDO('mysql:host=localhost;dbname=pj01;charset=utf8', 'root', '');
$db->query("INSERT INTO clientes VALUES (NULL, '$n', '$a','$c','$pas')");

# Salida
header('Location: index.php');
?>