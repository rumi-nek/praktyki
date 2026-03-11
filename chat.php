<?php 
session_start();
include_once "config.php";

if(!isset($_SESSION['user_id'])){
    header("location: login.php");
}

?>
<link rel="stylesheet" href="styless.css">
<body>

<div class="chat-container">

    <div class="sidebar">
        <h3>CHANNELS</h3>
        <div class="channel-link active">Main Channel</div>
    </div>

    <div class="chat-area">

        <header>Chat<a href="logout.php" class="logout">Logout</a></header>

        <div class="chat-box"></div>

        <form class="typing-area">
            <input type="hidden" name="incoming_id" value="0">
            <input type="text" name="message" placeholder="Napisz wiadomość" autocomplete="off">
            <button type="submit">send</button>
        </form>
    </div>

</div>

<script src="chat.js"></script>

</body>

</html>
