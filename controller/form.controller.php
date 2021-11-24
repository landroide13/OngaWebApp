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

    /*

    static public function ctrBooking(){

        if(isset($_POST[''])}){
              $table = '';
              $data = array(
                  "" => $_POST[''],
                  "" => $_POST[''],
                  "" => $_POST[''],
                  "" => $_POST['']
              )
                  $response = ModelForms::mdlBooking($data, $table);
          }
          return $response;
      } 

    
      static public function ctrRoom(){

        if(isset($_POST[''])}){
              $table = '';
              $data = array(
                  "" => $_POST[''],
                  "" => $_POST[''],
                  "" => $_POST[''],
                  "" => $_POST['']
              )
                  $response = ModelForms::mdlBooking($data, $table);
          }
          return $response;
      } 

*/

}


?>



























