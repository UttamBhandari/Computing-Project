<?php
session_start();
include_once('../connection.php');
if(isset($_POST['Login']))

{
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sql="select * from user where email ='".$user."' and password='".$pass."' ";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        while($row=$result->fetch_assoc()){
            $_SESSION['userid']=$row['id'];
            $_SESSION['username']=$row['fname'];
            header('location:./pages/main.php');
        }}



    else
    {
        ?>
        <script language="javascript">
            alert ("Invalid Username or Password");

        </script>

        <?php
        header('location:../index.php');
    }
}


?>