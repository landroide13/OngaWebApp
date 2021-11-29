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

        static public function mdlBook($table, $data){ 

            $stmt = Connection::connect() -> prepare("INSERT INTO $table(room_name, checkin, checkout, first_name, last_name, extras) VALUES (:room_name, :checkin, :checkout, :first_name, :last_name, :extras)");
            
            $stmt -> bindParam(":room_name", $data['room_name'], PDO::PARAM_STR);
            $stmt -> bindParam(":first_name", $data['first_name'], PDO::PARAM_STR);
            $stmt -> bindParam(":last_name", $data['last_name'], PDO::PARAM_STR);
            $stmt -> bindParam(":checkin", $data['checkin'], PDO::PARAM_STR);
            $stmt -> bindParam(":checkout", $data['checkout'], PDO::PARAM_STR);
            $stmt -> bindParam(":extras", $data['extras'], PDO::PARAM_STR);
            
            if($stmt -> execute()){
               return 'Ok';
            }else{
                print_r(Connection::connect()-> errorInfo());
            }

            $stmt -> close();
            $stmt = null;

        }

        static public function mdlRoom($table, $data){

            $stmt = Connection::connect() -> prepare("INSERT INTO $table(name, description, type) VALUES (:name, :description, :type)");
            
            $stmt -> bindParam(":name", $data['name'], PDO::PARAM_STR);
            $stmt -> bindParam(":description", $data['description'], PDO::PARAM_STR);
            $stmt -> bindParam(":type", $data['type'], PDO::PARAM_STR);

            if($stmt -> execute()){
               return 'Ok';
            }else{
                print_r(Connection::connect()-> errorInfo());
            }

            $stmt -> close();
            $stmt = null;

        }


        // Get Method for All.
        static public function mdlGet($table, $item, $value){

            if($item == null && $value == null){

                $stmt = Connection::connect() -> prepare("SELECT * FROM $table");
        
                $stmt -> execute();
            
                return $stmt -> fetchAll();

            }else{

                $stmt = Connection::connect() -> prepare("SELECT * FROM $table WHERE $item = :$item");

                $stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);
        
                $stmt -> execute();
        
                return $stmt -> fetch();

            }

            $stmt -> close();
            $stmt = null;
          }


          static public function mdlUpdateBook($table, $data){ 

            $stmt = Connection::connect() -> prepare("UPDATE $table SET room_name = :room_name, checkin = :checkin, checkout = :checkout, first_name = :first_name, last_name = :last_name, extras = :extras WHERE id = :id");
            
            $stmt -> bindParam(":room_name", $data['room_name'], PDO::PARAM_STR);
            $stmt -> bindParam(":first_name", $data['first_name'], PDO::PARAM_STR);
            $stmt -> bindParam(":last_name", $data['last_name'], PDO::PARAM_STR);
            $stmt -> bindParam(":checkin", $data['checkin'], PDO::PARAM_STR);
            $stmt -> bindParam(":checkout", $data['checkout'], PDO::PARAM_STR);
            $stmt -> bindParam(":extras", $data['extras'], PDO::PARAM_STR);
            $stmt -> bindParam(":id", $data['id'], PDO::PARAM_INT);
            

            if($stmt -> execute()){
               return 'Ok';
            }else{
                print_r(Connection::connect()-> errorInfo());
            }

            $stmt -> close();
            $stmt = null;

        }


        static public function mdlDeleteBook($table, $value){ 

            $stmt = Connection::connect() -> prepare("DELETE FROM $table WHERE id = :id");
            
            $stmt -> bindParam(":id", $value, PDO::PARAM_INT);
            

            if($stmt -> execute()){
               return 'Ok';
            }else{
                print_r(Connection::connect()-> errorInfo());
            }

            $stmt -> close();
            $stmt = null;

        }

        static public function mdlUpdateRegister($table, $data){ 

            $stmt = Connection::connect() -> prepare("UPDATE $table SET first_name = :first_name, last_name = :last_name, email = :email, password = :password WHERE user_id = :id");
            
            $stmt -> bindParam(":first_name", $data['first_name'], PDO::PARAM_STR);
            $stmt -> bindParam(":last_name", $data['last_name'], PDO::PARAM_STR);
            $stmt -> bindParam(":email", $data['email'], PDO::PARAM_STR);
            $stmt -> bindParam(":password", $data['password'], PDO::PARAM_STR);
            $stmt -> bindParam(":id", $data['id'], PDO::PARAM_INT);
            

            if($stmt -> execute()){
               return 'Ok';
            }else{
                print_r(Connection::connect()-> errorInfo());
            }

            $stmt -> close();
            $stmt = null;

        }

        static public function mdlDeleteRegister($table, $value){ 

            $stmt = Connection::connect() -> prepare("DELETE FROM $table WHERE id = :id");
            
            $stmt -> bindParam(":id", $value, PDO::PARAM_INT);
            

            if($stmt -> execute()){
               return 'Ok';
            }else{
                print_r(Connection::connect()-> errorInfo());
            }

            $stmt -> close();
            $stmt = null;

        }





    }








































