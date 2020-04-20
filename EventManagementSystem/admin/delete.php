<?php
    require('../connection.php');
    if(!isset($_SESSION['admin']))
    {
        header('Location:../../index.php');
    }
    $id = $_GET['id'];
    $query = "DELETE FROM `events` WHERE `id`='$id'";
    if(mysqli_query($conn , $query))
    {
        header("location:ems_admin_events.php");
    }
?>