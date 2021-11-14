<?php

class Connection{

  static public function connect(){

    $link = new PDO("mysql:host=localhost;dbname=","root", "");

    return $link;
  }

}
