<?php


    class User{

        public $name = "";
        public $surname = "";
        public $isUserOnline = false;

        public function setUserOnline(){
            $this->isUserOnline = true;
        }

        public function setUserOffline(){
            $this->isUserOnline = false;
        }

        public function setUserName(){
            $this->name = $name;
        }

    }


    


    $user = new User();

    $user->setUserName($_POST['username']);