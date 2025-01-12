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
            $password=$_POST['password'];
            $data="SELECT * FROM chessplayers WHERE name ='$name' and password ='$password';";
            $result=mysqli_query($con, $data);
            if ($result && $name=['name'] && $password=['password']){
                echo "You have been logged in";
            }
            else if($result && $name!=['name'] && $password=['password']){
                echo "Please Enter your valid name.";
            }
            else if($result && $name=['name'] && $passwordF!=['password']){
                echo "Please Enter your valid password.";
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