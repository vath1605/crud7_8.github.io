<?php
session_start();
include './db.php';
    if(isset($_POST['submitBtn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        if(($name != '' && $email != '' && $pass != '' && $cpass != '') && $pass == $cpass){
            $query = "INSERT INTO tbl_user(name,email,pass) VALUES ('$name','$email','$pass')";
            $res = mysqli_query($conn,$query);
            if($res){
                $_SESSION['msg']='Information Inserted Success.';
                $_SESSION['isSuccess']=true;
            }
        }else{
            $_SESSION['msg'] = 'Cannot Register. Try again...';
            $_SESSION['isSuccess']=false;
        }
        header('Location: index.php');
    }
?>