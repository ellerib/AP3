<?php
    class User{
        private $username;
        private $password;
        private $role;

        // METHOD FOR SETTER
        private function set_username($username){
            $this->username = $username;
        }

        private function set_password($password){
            $this->password = $password;
        }

        private function set_role($role){
            $this->role = $role;
        }

            // METHOD FOR GETTER
        private function get_username(){
            return $this->username;
        }

        private function get_password(){
            return $this->password;
        }

        private function get_role(){
            return $this->role;
        }
    }    

?>