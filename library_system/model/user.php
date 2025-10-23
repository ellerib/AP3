<?php
    class User{
        private $conn;
        private $lastname, $firstname, $role, $email, $password;

        public function __construct($lastname, $firstname, $email, $password, $role){
            $database = new Database();
            $this->conn = $database->getconnection();
            $this->lastname = $lastname;
            $this->firstname = $firstname;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
        }

        public function login() {
            $sql = "SELECT user_id, email, password, role FROM users WHERE email=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                if (password_verify($this->password, $row['password'])) {
                    session_start();
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['role'] = $row['role'];

                    
                    if ($row['role'] == 'student') {
                        header("Location: ../view/studentpage.php");
                    } elseif ($row['role'] == 'teacher') {
                        header("Location: ../view/teacherpage.php");
                    } elseif ($row['role'] == 'librarian') {
                        header("Location: ../view/librarianpage.php");
                    } elseif ($row['role'] == 'staff') {
                        header("Location: ../view/staffpage.php");
                    }
                    exit();
                    } else {
                        echo "<script>alert('Invalid password');</script>";
                    }
                } else {
                    echo "<script>alert('User not found');</script>";
            }
        }

        public function register(){
            $hashpassword = password_hash($this->password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(lastname, firstname, email, password, role) 
                VALUES(?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sssss", $this->lastname, $this->firstname, 
            $this->email, $hashpassword, $this->role);

            if($stmt->execute()){
                echo "<script> alert('User registered successfully') </script>";
            }else{
                echo "<script> alert('User unsuccessfully registered') </script>";
            }

        }
       
    }    

?> 