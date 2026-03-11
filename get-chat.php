<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['user_id'];
$sql = "SELECT * FROM messages ORDER BY msg_id";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        $class = ($row['outgoing_msg_id'] == $outgoing_id) ? "outgoing" : "incoming";
        echo '<div class="chat '.$class.'"><p>'.$row['msg'].'</p></div>';
    }
}
?>
