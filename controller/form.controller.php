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
    
    public function ctrLogin(){
        if(isset($_POST['email'])){

            $table = 'register';
            $item = 'email';
            $value = $_POST['email'];

            $answer = ModelForms::mdlGet($table, $item, $value);

            if($answer['email'] == $_POST['email'] && $answer['password'] == $_POST['password']){

                echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }

                        window.location = "./index.php?page=book";
                     
                      </script>';

            }else{

                echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                     </script>';

                echo '<div class="alert alert-danger">Error, wrong user or password</div>';     
            };


        }
    }


    static public function getRooms(){
        $table = 'room';
        $answer = ModelForms::mdlGet($table, null, null);

        return $answer;
    }

    static public function getBook(){
        $table = 'book';
        $answer = ModelForms::mdlGet($table, null, null);

        return $answer;
    }

    static public function getCustomer(){
        $table = 'register';
        $answer = ModelForms::mdlGet($table, null, null);

        return $answer;
    }

}


?>



























