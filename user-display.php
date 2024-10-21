<?php
session_start();
include "db_conn.php";

// Check if the user is logged in (you can adjust this condition based on how you handle login)
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    // Get the logged-in user's data from the database
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_name = $row['user_name'];
        $name = $row['name'];
        $phone = $row['phone'];
    } else {
        echo "No user found!";
        exit();
    }
} else {
    header("Location: login.php");  // Redirect to login if the user is not logged in
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        .user-info {
            background-color: #fff;
            padding: 20px;
            margin: 0 auto;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 18px;
            color: #666;
        }
        a {
            text-decoration: none;
            color: #0066cc;
        }
    </style>
</head>
<body>

    <div class="user-info">
        <h2>User Information</h2>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Username:</strong> <?php echo $user_name; ?></p>
        <p><strong>ID:</strong> <?php echo $id; ?></p>
        <p><strong>Phone Number:</strong> <?php echo $phone; ?></p>
        <br>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>
