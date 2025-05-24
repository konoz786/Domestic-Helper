<?php
    include 'connect.php';

   

    if(isset($_POST['submit'])){

        session_start();

        $email=$_SESSION['email'];
        $password=$_SESSION['password'];

        if(!empty($_POST['name'])){
           $name=$_POST['name'];
           $sql="UPDATE domestic_helper
           SET name='$name'
           WHERE password='$password' AND email='$email'";

           $result=mysqli_query($con,$sql);
        } 

        if(!empty($_POST['age'])){
            $age=$_POST['age'];
            $sql="UPDATE domestic_helper
            SET age='$age'
            WHERE password='$password' AND email='$email'";
 
            $result=mysqli_query($con,$sql);
         } 

         if(!empty($_POST['details'])){
            $details=$_POST['details'];
            $sql="UPDATE domestic_helper
            SET details='$details'
            WHERE password='$password' AND email='$email'";
 
            $result=mysqli_query($con,$sql);
         } 

         if(!empty($_POST['password'])){
            $password2=$_POST['password'];
            $sql="UPDATE domestic_helper
            SET password='$password2'
            WHERE password='$password' AND email='$email'";
 
            $result=mysqli_query($con,$sql);
         } 

         if(!empty($_POST['fee'])){
            $fee=$_POST['fee'];
            $sql="UPDATE domestic_helper
            SET fee_per_work='$fee'
            WHERE password='$password' AND email='$email'";
 
            $result=mysqli_query($con,$sql);
         } 

         header('location:helper_profile.php');

    }

?>

