
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="joinstyle.css">
    <title>MyUniverseGym</title>
</head>

<body>
     
    <div class="box">

        <a  href="signup.php" >Join Gym</a>
        <a id="loginbtn" href="login.php" >Login</a>
        <a id="loginbtn" href="daypass.php" >Buy One Day Pass</a>
        <?php
            // Display the Profile button only if the user is logged in
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
                echo '<a id="createAdmin" href="admin_views/add_admin.php"  >Create Admin</a>';
            }
            ?>
            

        <!--<form action="auth/loginphp.php" method="post">
            Username:
            <input type="text" name="username" id="usrname">
            <br><br>
            Pasword:
            <input type="password" name="password" id="passwd"><br><br>
            
            <input type="submit" id="submit" value="submit"><br>





        </form>-->
    </div>
</body>