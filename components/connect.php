<?php
$host = 'localhost:3307';
$db_name = 'mysql:host=localhost:3307; dbname=food_db';
$user_name = 'root';
$user_password = '';

// $dsn = "mysql:host=$host; dbname=$db; charset=$charset";


// $conn=mysqli_connect("localhost", "root", "", "food_db");
// try {
    $conn = new PDO($db_name, $user_name, $user_password);
    // Other code here
// } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

?>