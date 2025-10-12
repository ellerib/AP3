<?php
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

        public function register($conn,$lastname, $firstname, $email, $password, $role){
            $sql = "INSERT INTO users(lastname, firstname, email, password, role) VALUES(?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssss", $this->lastname, $this->firstname,
            $this->email,$this->password, $this->role);

            if($stmt->execute()){
                return "User registered";
            }else{
                return "User unsuccessfully registered";
            }

        }

        public function login($conn){
            $sql = "SELECT email, password, role FROM users
            WHERE email=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $this->email);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows===1){
                $user = $result->fetch_associate();

                if(password_verify($this->password, $user['password'])){
                    session_start();
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['role_id'] = $user['role'];

                    switch($user['role']){
                        case 'student':
                            header("studentpage.php");
                            break;
                        case 'teacher':
                            header("teacherpage.php");
                            break;
                        case 'librarian':
                            header("librarianpage.php");
                            break;
                        default:
                            header("staffpage.php");
                        break;
                    }


                }else{
                    return "Invalid password";
                }

            }else{
                return "User not found";
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

?>