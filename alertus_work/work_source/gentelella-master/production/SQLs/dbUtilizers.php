<?php

/**
 * @author jon0
 * @copyright 2016
 */

include "dbMan.php";

//function Add_Master_User()
//{
    
        $SQLman = new MySQLmanager;
    
           $SQLman->dbHost = "localhost";
           $SQLman->dbName = "testdb";
           $SQLman->dbUser = "root";
           $SQLman->dbPass = "toor";
           
           $SQLman->ConnectToSQL();
    
    
    $sFirstname = $_REQUEST["firstname"];
    $sSurname = $_REQUEST["surname"];
    $sEmail = $_REQUEST["email"];
    $sPassword = $_REQUEST["password"];
    $sTelnum = $_REQUEST["telnum"];
    $sPrivilege = $_REQUEST["privilege"];
    
    //$dateCreated = new DateTime(); //Registration Time Received
    
    $dateCreated = time();
    
    echo "DATE TIME = " . $dateCreated;
    
         $tableName = "master_users";
    
    //INSERT INTO dbname (id, Name, Description, shortDescription, Ingredients, Method, Length, dateAdded, Username) VALUES ('', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
    
         $sQuer = "INSERT INTO ". $tableName . " (datecreate, firstname, surname, email, password, telnum, privilege) VALUES ( '$dateCreated', '$sFirstname','$sSurname', '$sEmail', '$sPassword', '$sTelnum', '$sPrivilege' )";
         $SQLman->QueryDB($sQuer);
         
         Print "Your table has been populated with QUERY -> $sQuer <br>";
//}

?>