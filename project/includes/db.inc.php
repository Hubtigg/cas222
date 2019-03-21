<?php

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=chrisbic_cas222', 'chrisbic_cas222', 'caS222bick');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}