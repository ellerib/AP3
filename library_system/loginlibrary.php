<!DOCTYPE html>
<html lang="en">   
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library System Login</title>

    <style>
        /* === General Page Styles === */
        body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: white; /* dark background */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        }

        /* === Header === */
        header {
        width: 100%;
        background-color: #244a32; /* dark green */
        color: white;
        padding: 12px 30px;
        font-weight: bold;
        font-size: 18px;
        position: absolute;
        top: 0;
        left: 0;
        }

        /* === Login Form Container === */
        .loginform {
        background-color: #326b45; /* main green box */
        padding: 40px 50px;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        width: 320px;
        margin-top: 80px; /* to avoid overlapping header */
        }

        /* === Form Fields === */
        form {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        }

        input[type="text"],
        input[type="password"],
        select {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: none;
        outline: none;
        background-color: white;
        font-size: 14px;
        font-weight: bold;
        }

        /* === Labels === */
        form label,
        form p {
        color: white;
        align-self: flex-start;
        margin: 0;
        font-size: 14px;
        font-weight: bold;
        }

        /* === Links === */
        a {
        text-decoration: none;
        font-weight: bold;
        color: #ffffff;
        font-size: 14px;
        }

        a:hover {
        text-decoration: underline;
        }

        /* === Buttons === */
        button {
        width: 100%;
        padding: 10px;
        background-color: #1c3726; /* darker green */
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        font-size: 15px;
        }

        button:hover {
        background-color: #21402b;
        }

        /* "Create New User" Button Styled Like Your Figma */
        .create-btn {
        display: inline-block;
        width: auto;
        padding: 8px 14px;
        margin-top: 5px;
        background-color: #1c3726;
        border-radius: 6px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        }

        .create-btn:hover {
        background-color: #21402b;
        }

        /* === Footer Bar === */
        .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        background-color: #244a32;
        height: 40px;
        }

        /* === Responsive Design === */
        @media (max-width: 400px) {
        .loginform {
            width: 85%;
            padding: 30px;
        }
        }

        #logintext{
            font-size: 15px;
        }
    </style>
</head>
<body>

    <?php
       
        $host = "localhost";
        $username ="root";
        $password = "";
        $db = "librarysystem";

        $conn = new mysqli($host, $username, $password, $db);

        if($conn->connect_error){
            die("Connect error" .$conn->connect_error);
        }

        

        // if(isset($_POST["login"])){
        //     // GETTING THE DATA 
        //     $login_email = trim($_POST['email']);
        //     $login_password = $_POST['password'];
        //     $login_role = $_POST['roletype'];

        // }

        // if($_SERVER["REQUEST_METHOD"]=='POST'){
        //     $login_email = trim($_POST['email']);
        //     $login_password = $_POST['password'];
        //     $login_role = $_POST['roletype'];

        //     $user = new User("","",$login_email,$login_password, $login_role);

        //     $login_email = $user->get_email();
        //     $login_role = $user->get_role();

        //     $sql = "SELECT email, password FROM users WHERE email=?";
        //     $stmt = $conn->prepare($sql);
        //     $stmt->bind_param("s",$login_email);
        //     $stmt->execute();



        // }

        


    ?>
    <!-- Header -->
    <header>Library System</header>
    <!-- Login Box -->
    <div class="loginform">
        <form action="" method="post">  
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <label for="" id="logintext"> Login As </label>
        <select name="roletype"> 
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="librarian">Librarian</option>
            <option value="staff">Staff</option>
        </select>

        <a href="forgotpassword.php">Forgot Password?</a>

        <button type="submit" name="login">Log-In</button>

        <a href="userregistration.php" class="create-btn">Create New User</a>
        </form>
    </div>

    <!-- Footer Bar -->
    <div class="footer"></div>
    


</body>
</html>
