<?php
    //create credentials for connection with database
    $servername = 'localhost';
    $username = 'root';
    $password = null;
    $db_name = 'event_management_system';

    //create connection variable and connect with mysql databse
    $conn = mysqli_connect($servername , $username, $password, $db_name);

    //check your connection 
    if( !$conn )
    {
        //if connection is not successfull display error message
        die('Connection Failed'.mysqli_connect_error());
    }
?>