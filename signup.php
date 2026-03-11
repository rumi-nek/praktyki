<?php
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($password)){

    $check_sql = mysqli_query($conn, "SELECT * FROM users WHERE fname = '{$fname}'");
    if(mysqli_num_rows($check_sql) > 0){
        echo "Ten użytkownik już istnieje!";
    } else {

        $sql = mysqli_query($conn, "INSERT INTO users (fname, password) VALUES ('$fname', '$password')");
        if($sql) echo "success";
    }
} else {
    echo "Wszystkie pola są wymagane!";
}
?>
