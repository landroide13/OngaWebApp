<?php

class Connection{

  static public function connect(){

    $link = new PDO("mysql:host=localhost;dbname=ongaonga","root", "");

    return $link;
  }

}
