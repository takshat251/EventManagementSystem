<?php
    require('../connection.php');
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header('Location:../index.php');
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $id = $_GET['id'];
        echo $id;
        echo $title;
        echo $date;
        echo $description;
        $query = "UPDATE `events` SET `title`='$title',`description`='$description',`date`='$date' WHERE `id`='$id'";
        if(mysqli_query($conn ,$query))
        {
            header("Location:ems_admin_events.php");
        }
    }
?>