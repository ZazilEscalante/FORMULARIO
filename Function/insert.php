<?php

print_r ($_POST);

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tel = $_POST['telefono'];

print("<br>Nombre de usuario:" . $nombre . "email:" . $email . "tel: " . $telefono);
?>