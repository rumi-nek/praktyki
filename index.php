<?php include_once "header.php"; ?>

<body>

    <div class="wrapper">
        <section class="form signup">
            <header>pleasework</header>
            <form action="signup.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Name</label>
                        <input type="text" name="fname" id="fname"
                        placeholder="Name" required>
                    </div>     
                </div>

                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" id="password"
                    placeholder="Enter new password" required>
                </div>

                <div class="field button">
                    <input type="submit" name="submit" value="Continue">
                </div>

            </form>
            <div class="link">Already sign up?<a href="login.php">Login</a></div>
       </section>
    </div>

    <script src="signup.js"></script>
</body>
</html>
