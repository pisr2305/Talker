<?php

require 'db-pswd.inc.php';

try {
    //DOCKER
//$connection = new PDO('mysqlhost=mysql;dbname=talker_db' , 'root' , 'talker-root-password');

    //VAGARANT
    //$connection = new PDO('mysqlhost=mysql;dbname=talker_db' , ROOT , ROOT);

    //XAMPP
    $connection = new PDO('mysql:host=localhost;dbname=talker_db' , XAMPP[0] , XAMPP[1]);

    //print "Success connected to he database!";

}catch (PDOException $e) {
    print "Error!: "  . $e->getMessage() . "<br/>";
   die();
}




?>