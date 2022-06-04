<?php 
    function loginUser(){
        $user = file('model/login.csv');
        return $user;
    }


?>