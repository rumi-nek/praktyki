<?php
session_start();
include_once "config.php";

if(!isset($_SESSION['user_id'])){
    exit;
}

$current_user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT user_id, fname FROM users WHERE user_id != ? ORDER BY fname ASC");
$stmt->bind_param("i", $current_user_id);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $user_id = $row['user_id'];
        $user_name = htmlspecialchars($row['fname'], ENT_QUOTES, 'UTF-8');
        echo '<div class="user-item" data-user-id="'.$user_id.'">'.$user_name.'</div>';
    }
}

$stmt->close();
?>