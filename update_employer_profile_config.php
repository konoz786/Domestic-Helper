<?php
    include 'connect.php';

    if(isset($_POST['submit'])){

        if(isset($_POST['name'])){
           $name=$_POST['name'];
           $sql="UPDATE employer_t
           SET name='$name'
           WHERE password='1234' AND email='ayonrahman488@yahoo.com'";

           $result=mysqli_query($con,$sql);
        } 

        if(isset($_POST['contact'])){
            $contact=$_POST['contact'];
            $sql="UPDATE employer_t
            SET contact='$contact'
            WHERE password='1234' AND email='ayonrahman488@yahoo.com'";
 
            $result=mysqli_query($con,$sql);
         } 

         if(isset($_POST['address'])){
            $address=$_POST['address'];
            $sql="UPDATE employer_t
            SET address='$address'
            WHERE password='1234' AND email='ayonrahman488@yahoo.com'";
 
            $result=mysqli_query($con,$sql);
         } 

         if(isset($_POST['email'])){
            $email=$_POST['email'];
            $sql="UPDATE employer_t
            SET email='$email'
            WHERE password='1234' AND email='ayonrahman488@yahoo.com'";
 
            $result=mysqli_query($con,$sql);
         } 

         if(isset($_POST['password'])){
            $password=$_POST['password'];
            $sql="UPDATE employer_t
            SET password='$password'
            WHERE password='1234' AND email='ayonrahman488@yahoo.com'";
 
            $result=mysqli_query($con,$sql);
         } 

         header('location:employer_profile.php');

    }

?>

