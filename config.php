<?php
/**
 * 
 * Project: Food delivery app
 * Package: Database configuration file
 * Author: Junaid Bin Jaman
 * Date: July, 24, 2023
 * Version: 1.0.0
 * 
 * On this file, I am creating a connection to mysql database
 */

$server   = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'jd_food_order';

try {
  $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Database connection successful";
} catch (PDOException $e) {
  echo $e->getMessage();
}