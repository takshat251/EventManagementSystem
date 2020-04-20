<?php
    //start session 
    //must be first line of a page
    session_start();
    if(isset($_SESSION['user'] )|| isset($_SESSION['admin']))
    {
        header('Location:index.php');
    }
    include_once('connection.php');
    $response='';
    //check the request method
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $response = '';
        /**
         * use md5 to encrypt the password and then match it with the password in the databse
         */
        $password= md5($password);
        /**
         * firstly validate the request
         */
        if(empty($email) || empty($password))
        {
            $response = 'Fields cannot be empty';
        }
        else
        {
            /**
             * secondly check if the user is admin or not
             * write the query to search for the given email and password in admin table
             **/
            $query = "SELECT `username`, `password` FROM `admin` WHERE `username`='$email' AND `password`='$password'";

            /**
             * execute the query using mysqli_query() function
             */
            $result = mysqli_query($conn , $query);
            if(mysqli_num_rows($result) > 0)
            {
                $_SESSION['admin'] = $email;
                header('Location:admin/ems_admin.php');
            }

            /**
             * thirdly check if the user exists in your database
            **/
            $query = "SELECT `email`, `password` FROM `users` WHERE `email`='$email' AND `password`='$password'";
            /**
             * execute the query using musqli_query() function 
             **/
            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result) > 0)
            {
                //returns the row returned by mysql on exceutionof query as key value pairs
                $row = mysqli_fetch_assoc($result);
                //create session for security
                $_SESSION['user'] = $row['email'];
                //redirect the user to user panel
                header('Location:user_panel.php');
            }
            else
            {
                $response = 'Email or Password is wrong';
            }
        }
        

    }
?>