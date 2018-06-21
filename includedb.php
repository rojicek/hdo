<?php

    $databaseConnection = new mysqli("localhost","dbu_rojicek","J4dk9IOPkCcXrDG", "db_rojicek");
    if ($databaseConnection->connect_error)
    {
        
        mail('jiri@rojicek.cz', 'DB down !', $databaseConnection->connect_error);
        mail('sluzby@radeksoucek.cz', 'DB down ! (rojicek)', $databaseConnection->connect_error);
        die("Database selection failed: " . $databaseConnection->connect_error);        
    }
    
    
?>