<?php
include('connection_mysqli.php');
if(isset($_POST['btn']))
{
$name=trim($_POST['name']);
$age=trim($_POST['age']);
$guardian=trim($_POST['gname']);
$email=trim($_POST['email']);
$phoneo=trim($_POST['phoneo']);
$phoneh=trim($_POST['phoneh']);
//Addr Removed
//Checking If the email exits,Check me daddy!
$do=mysqli_query($conn,"select * from users where EMAIL='$email'");
    $count=mysqli_num_rows($do);
//The insertion Part
if($count=='0'){
        $do1=mysqli_query($conn,"insert into users (UID,NAME,AGE,GUARDIAN_NAME,EMAIL,PHONE_O,PHONE_H) Values ('','$name','$age','$guardian','$email','$phoneo','$phoneh')"); //chess is a tablename in the Database 'dbtest'
mail($email,Hi ,"Hello $name, You have been Sucessfully Registered");
$errmsg="Sucessfully Registered And Email Sent";
    }
else{
  $errmsg="Sory Email Id exits";
}
    if ( !$do1 ) {
$errmsg="Registration Failed,Try again";
die("Connection failed : " . mysql_error());
 }
}
?>
