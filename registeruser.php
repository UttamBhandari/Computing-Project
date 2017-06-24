<?php
session_start();
include_once('../connection.php');
if(isset($_POST['Register']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $add=$_POST['address'];
    $con=$_POST['contact'];
    $user=$_POST['username'];
    $pass=$_POST['password'];

    $query="insert into user values(null,'$fname', '$lname','$add','$con','$user','$pass')";
    $in=$conn->query($query);
    if($in!=0){

        $sql="select * from user where email ='".$user."' and password='".$pass."' ";
        $res = $conn->query($sql);
        if($res->num_rows == 1){
            while($row=$res->fetch_assoc()){
                $_SESSION['userid']=$row['id'];
                $_SESSION['username']=$row['fname'];

                header('location:../pages/main.php');
            }
        }


    }
}

?>
