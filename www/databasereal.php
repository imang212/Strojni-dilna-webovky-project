<?php
// Konfigurace pro Docker prostředí
$servername = isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : "db";
$username = isset($_ENV['DB_USER']) ? $_ENV['DB_USER'] : "root";
$password = isset($_ENV['DB_PASS']) ? $_ENV['DB_PASS'] : "root_password";
$name = isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : "strojni_dilna";

$conn = mysqli_connect($servername, $username, $password, $name);
// Nastavení charset pro správné zobrazení českých znaků
mysqli_set_charset($conn, "utf8mb4");
// Kontrola spojení
if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
?>