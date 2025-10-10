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

        // METHOD FOR SETTER
        public function set_lastname($lastname){
            $this->lastname = $lastname;
        }

        public function set_firstname($firstname){
            $this->firstname = $firstname;
        }
        public function set_email($email){
            $this->email = $email;
        }

        public function set_password($password){
            $this->password = $password;
        }

        public function set_role($role){
            $this->role = $role;
        }

            // METHOD FOR GETTER
        
        public function get_lastname(){
            return $this->lastname;
        }

        public function get_firstname(){
            return $this->firstname;
        }

        public function get_email(){
            return $this->email;
        }

        public function get_password(){
            return $this->password;
        }

        public function get_role(){
            return $this->role;
        }
    }    

?>