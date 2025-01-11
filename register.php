<?php 
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $servername="localhost";
        $username="root";
        $password="";
        $database="satranj";
        $con=mysqli_connect($servername,$username, $password, $database);
        // echo "connection is assigned";
        if($con){
            // echo "we connected to the database";
            $name=$_POST['name'];
            $email=$_POST['Email'];
            $password=$_POST['password'];
            $data="INSERT INTO chessplayers VALUES ('$name', '$email', '$password');";
            $result=mysqli_query($con, $data);
            // echo "value query is assigned.";
            if($result){
                echo "You have been signed in.";
                // return true;
            }
            else{
                echo "Some error occured.";
            }

        }
        else{
            echo "We couldn't connet to the server. Please try again after sometime.";
        }
    }
    else{
        echo "Request method is not post";
    }
?>