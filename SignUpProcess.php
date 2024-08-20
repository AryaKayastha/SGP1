<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $username=$_POST['UserName'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $sql="insert into login(Username,Email,phoneNumber,password) values('$username','$email','$phone','$password')";
    if(mysqli_query($conn, $sql))
    {
        echo"<script>alert('New data is added')</script>";
    }
    else
    {
        echo "error:".mysqli_error( $conn);
    }
    mysqli_close($conn);
}