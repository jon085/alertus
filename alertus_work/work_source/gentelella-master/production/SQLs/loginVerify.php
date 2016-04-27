<?php

include "./dbMan.php";


//connect the mysql_db
$mysql_conn = new MySQLmanager;
    
           $mysql_conn->dbHost = "localhost";
           $mysql_conn->dbName = "testdb";
           $mysql_conn->dbUser = "root";
           $mysql_conn->dbPass = "toor";
           
           $mysql_conn->ConnectToSQL();

		   $sqlTableName = 'master_users';
		   
		   $stFirstname = $_REQUEST["firstname"];
		   $stPassword = $_REQUEST["password"];
   
		   

		//reading from mysql table
//reading from mysql table
		$res="SELECT * FROM " .$sqlTableName. " WHERE firstname='$stFirstname' AND password='$stPassword'";
		echo $res;
		$mysql_conn->QueryDB($res);
			
		if ($mysql_conn->result != null) {
			//$gear = mysqli_fetch_array( $ret);

			echo "Username and Password found"; 
		}	else {
			 echo "Credentials not found";
		}
			$gear = mysqli_fetch_array($mysql_conn->result);
			echo "result=".$gear[0]; 
		//authentication
		$count=mysqli_num_rows($mysql_conn->result);
		if($count==1) {		
		//authenticate the user
		echo "Valid credentials.";
		}else {
			echo "Invalid credentials.";
		}