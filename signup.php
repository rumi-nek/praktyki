<?php
include_once "config.php";
$fname = $_POST['fname'];
$password = $_POST['password'];

if(!empty($fname) && !empty($password)){
    $check_sql = $conn->prepare("SELECT * FROM users WHERE fname = ?");
    $check_sql->execute([$fname]);
    if($check_sql->fetch()){
        echo "Ten użytkownik już istnieje!";
    } else {
        $sql = $conn->prepare("INSERT INTO users (fname, password) VALUES (?, ?)");
        $result = $sql->execute([$fname, $password]);
        if($result) echo "success";
    }
} else {
    echo "Wszystkie pola są wymagane!";
}
?>
