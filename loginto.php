<?php
session_start();
include_once "config.php";

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($password)){
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE fname = '{$fname}' AND password = '{$password}'");
    
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['user_id'] = $row['user_id'];
        echo "success";
    } else {
        echo "Nieprawidłowe dane. Zarejestruj się, jeśli nie masz konta!";
    }
} else {
    echo "Wypełnij wszystkie pola!";
}
?>
