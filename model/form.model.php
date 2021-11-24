<?php

require_once 'connection.php';


    class ModelForms{

        static public function mdlRegister($table, $data){

            $stmt = Connection::connect() -> prepare("INSERT INTO $table(first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)");
            
            $stmt -> bindParam(":first_name", $data['first_name'], PDO::PARAM_STR);
            $stmt -> bindParam(":last_name", $data['last_name'], PDO::PARAM_STR);
            $stmt -> bindParam(":email", $data['email'], PDO::PARAM_STR);
            $stmt -> bindParam(":password", $data['password'], PDO::PARAM_STR);

            if($stmt -> execute()){
               return 'Ok';
            }else{
                print_r(Connection::connect()-> errorInfo());
            }

            $stmt -> close();
            $stmt = null;

        }


        // Get Method for All.
        static public function mdlGet($table){

            $stmt = Connection::connect() -> prepare("SELECT * FROM $table");
        
            $stmt -> execute();
        
            return $stmt -> fetchAll();
        
            $stmt -> close();
            $stmt = null;
          }




        

    }








































