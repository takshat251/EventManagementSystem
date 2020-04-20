<?php
session_start();
if(!isset($_SESSION['admin']))
{
    header("Location:../index.php");
}
require('../connection.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        
        
        $response = null;
        /**
         * validate the requests
         */
        if(empty($title) || empty($description) || empty($date))
        {
            $response = 'Fields cannot be empty';
        }
        else
        {
            /**
             * write query for inserting event into database
             */
            $query = "INSERT INTO `events` (`title` , `description` , `date`) VALUES ('$title' , '$description' , '$date')";
            if(mysqli_query($conn , $query))
            {
                // $response = "Event added successfully";
                header("Location:ems_admin_events.php");
            }
            else
            {
                // $response = "Something went wrong";
            }
        }
    }
?>