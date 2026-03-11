<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['user_id'];
$sql = "SELECT * FROM messages ORDER BY msg_id";
$query = $conn->query($sql);
$rows = $query->fetchAll(PDO::FETCH_ASSOC);
if(count($rows) > 0){
    foreach($rows as $row){
        $class = ($row['outgoing_msg_id'] == $outgoing_id) ? "outgoing" : "incoming";
        echo '<div class="chat '.$class.'"><p>'.$row['msg'].'</p></div>';
    }
}
?>
