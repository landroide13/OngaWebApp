<?php

class FormController{

    static public function ctrRegister(){

      if(isset($_POST['firstName'])){
            $table = "register";

            $data = array("first_name" => $_POST['firstName'],
                "last_name" => $_POST['lastName'],
                "email" => $_POST['email'],
                "password" => $_POST['pass'],
            );
            $response = ModelForms::mdlRegister($table, $data);
        }
        return $response;
    } 


    static public function ctrBook(){

        if(isset($_POST['room'])){
              $table = 'book';
              $data = array(
                  "room" => $_POST['room'],
                  "checkin" => $_POST['checkin'],
                  "checkout" => $_POST['checkout'],
                  "first_name" => $_POST['first_name'],
                  "last_name" => $_POST['last_name'],
                  "extras" => $_POST['extras'],
              );
            $response = ModelForms::mdlBook($data, $table);
          }
        return $response;
    } 

    
    static public function ctrRoom(){

        if(isset($_POST['name'])){
              $table = 'room';
              $data = array(
                  "name" => $_POST['name'],
                  "description" => $_POST['description'],
                  "type" => $_POST['type'],
              );
            $response = ModelForms::mdlRoom($data, $table);
        }
        return $response;
    } 

}


?>



























