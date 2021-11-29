<?php

  require_once '../model/connection.php';

  $sqa = $_POST['sqa'];
    
  $sqb = $_POST['sqb'];

  $answer = '';

    function searchBook(){ 

      $stmt = Connection::connect() -> prepare("SELECT * FROM `book` WHERE checkin = :checkin AND chekout = :checkout");
            
      $stmt -> bindParam(":checkin", $sqa, PDO::PARAM_STR);
      $stmt -> bindParam(":checkout", $sqb, PDO::PARAM_STR);
        
      $stmt -> execute();
        
      return $stmt -> fetch();

      $stmt -> close();
      $stmt = null;

    }

    function displaySearch(){

      $response = searchBook();

      if(!empty($response)){
        $answer = json_encode($response);
        return $answer;
        header('Content-Type: text/json; charset=utf-8');
      }else{
        echo "<tr><td colspan=3><h5>No Bookings found!</h5></td></tr>";
      }
    }









?>