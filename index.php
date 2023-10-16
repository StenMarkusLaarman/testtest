<?php	
	$serverName = "tcp:yourserver.database.windows.net,1433";
    $connectionOptions = array("Database"=>"yourdatabase",
        "Uid"=>"yourusername", "PWD"=>"yourpassword");
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
?>
