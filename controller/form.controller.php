<?php

class FormController{

    static public function ctrRegister(){

      if(isset($_POST['firstName'])){
            $table = "register";

            $data = array(
                "first_name" => $_POST['firstName'],
                "last_name" => $_POST['lastName'],
                "email" => $_POST['email'],
                "password" => $_POST['pass'],
            );
            $response = ModelForms::mdlRegister($table, $data);
        }
        return $response;
    } 


    static public function ctrBook(){

        if(isset($_POST['submit'])){
              $table = 'book';
              $msg = 'Error';
              $currenDate = new Date(date("Y-m-d")); 

              //Change Format date
              $dateIn = new DateTime($_POST['checkin']);
              $dateOut = new DateTime($_POST['checkout']); 

            if($dateIn > $dateOut && $dateIn < $currenDate){

                $msg .= " wrong chooise of dates, try again";
                echo $msg;

            }else{
                $data = array(
                  "room_name" => $_POST['roomName'],
                  "checkin" => $_POST['checkin'],
                  "checkout" => $_POST['checkout'],
                  "first_name" => $_POST['firstName'],
                  "last_name" => $_POST['lastName'],
                  "extras" => $_POST['extras'],
                );
                $response = ModelForms::mdlBook($table, $data);
            }
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
            $response = ModelForms::mdlRoom($table, $data);
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

                // $_SESSION['login'] = 'ok';

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

    static public function getBook($item, $value){
        $table = 'book';
        $answer = ModelForms::mdlGet($table, $item, $value);

        return $answer;
    }

    static public function getCustomer($item, $value){
        $table = 'register';
        $answer = ModelForms::mdlGet($table, $item, $value);

        return $answer;
    }

    public function updateBook(){

        if(isset($_POST['editroom_name'])){
              $table = 'book';
              $msg = 'Error';
              $currenDate = new Date(date("Y-m-d")); 

              //Change Format date
              $dateIn = new DateTime($_POST['checkin']);
              $dateOut = new DateTime($_POST['checkout']); 

            if($dateIn > $dateOut && $dateIn < $currenDate){

                $msg .= " wrong chooise of dates, try again";
                echo $msg;

            }else{
                $data = array(
                  "id" => $_POST['id_booking'],
                  "room_name" => $_POST['editroom_name'],
                  "checkin" => $_POST['editcheckin'],
                  "checkout" => $_POST['editcheckout'],
                  "first_name" => $_POST['editfirstName'],
                  "last_name" => $_POST['editlastName'],
                  "extras" => $_POST['editextras'],
                );
                $response = ModelForms::mdlUpdateBook($table, $data);
            }
        }

        if($response == 'ok'){

            echo '<script>
                        if(window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href);
                        }
                     </script>';

                echo '<div class="alert alert-success">Booking Updated</div>';     

        }

        return $response;

    }

    public function ctrDeleteBook(){
        if(isset($_POST['deleteBook'])){

            $table = 'book';
            $value = $_POST['deleteBook'];

            $response = ModelForms::mdlDeleteBook($table, $value);

            return $response;
        }
    }

}


?>



























