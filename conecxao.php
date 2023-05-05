<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','db_curso_udemy');

try {
    $dsn = "mysql:host=".HOST.";dbname=".DB;
    $pdo = new PDO($dsn, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
} catch(PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>