<?php
session_start();
include_once "config.php";

$fname = $_POST['fname'];
$password = $_POST['password'];

if(!empty($fname) && !empty($password)){
    $sql = $conn->prepare("SELECT * FROM users WHERE fname = ? AND password = ?");
   $ok = $sql->execute([$fname, $password]);

   if( !$ok ){
       echo "jakis blad";
   }

    $row = $sql->fetch(PDO::FETCH_ASSOC);
    if($row){
        $_SESSION['user_id'] = $row['user_id'];
        echo "success";
        exit;
    } else {
        echo "Nieprawidłowe dane. Zarejestruj się, jeśli nie masz konta!";
    }
} else {
    echo "Wypełnij wszystkie pola!";
}
?>
