<!-- <?php
    class User{
        public $lastname;
        public $firstname;
        public $email;
        public $password;
        public $role;


        public function __construct($lastname, $firstname, $email, $password, $role) {
            $this->lastname = $lastname;
            $this->firstname = $firstname;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
        }

        public function register($conn) {
            // Hash password once before inserting
            $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);

            // Prepare insert query
            $sql = "INSERT INTO users (lastname, firstname, email, password, role)
                    VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssss", 
                $this->lastname, 
                $this->firstname, 
                $this->email, 
                $hashedPassword, 
                $this->role
            );

            if ($stmt->execute()) {
                echo "<script>alert('User registered successfully!');</script>";
            } else {
                echo "<script>alert('Error: could not register user.');</script>";
            }

            $stmt->close();
        }


        public function login($conn) {
            $sql = "SELECT user_id, email, password, role FROM users WHERE email=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                // echo "Entered password: " . $this->password . "<br>";
                // echo "Hashed password from DB: " . $row['password'] . "<br>";

                if (password_verify($this->password, $row['password'])) {
                
                    session_start();
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['role'] = $row['role'];

                    if ($row['role'] == 'student') {
                        header("Location: studentpage.php");
                    } elseif ($row['role'] == 'teacher') {
                        header("Location: teacherpage.php");
                    } elseif ($row['role'] == 'librarian') {
                        header("Location: librarianpage.php");
                    } elseif ($row['role'] == 'staff') {
                        header("Location: staffpage.php");
                    }
                    exit();
                } else {
                    echo "<script>alert('Invalid password');</script>";
                }
            } else {
                echo "<script>alert('User not found');</script>";
            }
        }


        // public function emptyemail(){
        //     $result;

        //     if(empty($this->email)){
        //         echo "<script> alert('Email must not be empty')</script>";
        //     }else{
        //         $result = true;
        //     }

        //     return $result;
        // }

        // METHOD FOR SETTER
        // public function set_lastname($lastname){
        //     $this->lastname = $lastname;
        // }

        // public function set_firstname($firstname){
        //     $this->firstname = $firstname;
        // }
        // public function set_email($email){
        //     $this->email = $email;
        // }

        // public function set_password($password){
        //     $this->password = $password;
        // }

        // public function set_role($role){
        //     $this->role = $role;
        // }

        //     // METHOD FOR GETTER
        
        // public function get_lastname(){
        //     return $this->lastname;
        // }

        // public function get_firstname(){
        //     return $this->firstname;
        // }

        // public function get_email(){
        //     return $this->email;
        // }

        // public function get_password(){
        //     return $this->password;
        // }

        // public function get_role(){
        //     return $this->role;
        // }

    }    

?> -->