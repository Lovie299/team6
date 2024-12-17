<?php
$host = 'mtdb.cvgeuswekt15.eu-north-1.rds.amazonaws.com';
$db = 'mtdb'; // Your database name
$user = 'admin'; // Your database username
$pass = 'cloudteam6'; // Your database password (leave empty if using XAMPP default)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Database connections failed: " . $e->getMessage());
}
?>
