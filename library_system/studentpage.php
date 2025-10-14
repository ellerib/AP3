<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> User Registration Student Page </title>
</head>
<body>
    <!-- <?php
        session_start();

        // Check if user is logged in and is a student
        if (!isset($_SESSION['role']) || $_SESSION['role'] != 'student') {
            header("Location: login.php");
            exit();
        }
    ?> -->

    <h1> This is student page </h1>

    <form action="logout.php" method="post">
        <button type="submit"> Log out </button>
    </form>


</body>
</html>