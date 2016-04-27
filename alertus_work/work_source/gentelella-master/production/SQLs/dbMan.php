<?php

/**
 * @author Jon0
 * @copyright 2016
 */

include("../SMSs/send_sms.php");

class MySQLmanager {
    
    var $conn;
    var $result;
    
    public $hasPassword;
    
        var $dbHost = ''; //Database Host [Localhost]
        var $dbUser = ''; //DB Username
		var $dbPass = ''; //DB Password
		var $dbName = ''; //DB Name [Test01] - DB Identifier

                    function CheckIfMySQLIExists()
                    {
                        if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
                                echo 'We don\'t have mysqli!!!';
                            } else {
                                echo 'Phew we have it!';
                            }
}

    function ConnectToSQL()
    {
        echo $this->dbHost . '<br>';
        echo $this->dbUser . '<br>';
        echo $this->dbPass . '<br>';
        echo $this->dbName . '<br>';
    
        //$conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        //$this->conn = new mysqli('localhost', 'my_user', 'my_password', 'my_db');
        
        //mysqli_connect('localhost', 'my_user', 'my_password', 'my_db');
        $this->conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        
        
        if ($this->conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
            //echo "Connected successfully";
    }
    
    function QueryDB($Query)
    {
		echo "blablameeeeeeeeee";
        //if ($result = mysqli_query($conn, "SELECT * FROM profile"))
        if (!$this->result = mysqli_query($this->conn, $Query))
        {
            die("QueryDB Failed: " . $this->conn->error);
        }
        
       /* while($gear = mysqli_fetch_array( $result ))
       {
          //echo $gear['firstname']."<br>";
          echo $gear[0] ."<br>";
          echo $gear[1]."<br>";
          echo $gear[2]."<br>";
          echo $gear[3]."<br>";
          echo "---------<br>";
	   } */
    }
    
    
    function ProcessResult()
    {
        echo ">??>>>>";
        while($gear = mysqli_fetch_array( $this->result ))
        {
           echo $gear[0] ."<br>";
           echo $gear[1]."<br>";
           echo $gear[2]."<br>";
           echo $gear[3]."<br>";
           echo "---------<br>";
        }
    }

function ReadInputVariables()
{
      $sFName = $_REQUEST["firstname"];
      $sSName = $_REQUEST["surname"];
      $sEmail = $_REQUEST["email"];
      $sPNum = $_REQUEST["phonenumber"];
          echo "USERNAME = $sFName<br>";
          echo "SURNAME  = $sSName<br>";
          echo "EMAIL    = $sEmail<br>";
          echo "TELNUM   = $sPNum<br>";
}
    
    function addDataToCell($tableName, $VarInputs)
    {
//         $sQuer = "INSERT INTO ". $tableName ." VALUES ( 'Space', 'Man','space@man.com', '0119801123' )";
//         $this->QueryDB($sQuer);
//         
//         Print "Your table has been populated<br>";
         
         SendSMS("27828810837", "This is a server side message! Ta-da!");
    }
    
    function BuildOutputInserter($ss)
    {
        $vOut = "VALUES (";
        //foreach ($s as $ss)
//        {
//            $vOut .= 
//        }

        for ($i = 0; $i < $ss->count; $i++)
        {
            $vOut .= $ss[$i];
            if ($i < $ss->count()) {$vOut .= ", ";} 
        }
        $vOut .= ")";
        return $vOut;
    }
    
}

?>