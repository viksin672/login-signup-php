<?php

include('connection.php'); //This File will help us to connect to database

if(isset($_POST['button']))
{
    //Taking the values from the Form
    $name=trim($_POST['name']); 
   $email=($_POST['email']);
    $key=strip_tags(trim($_POST['key']));
    
    //Making sure that only one Email id should exist
    $do=mysql_query("select * from users where email='$email'");
    $count=mysql_num_rows($do);
    
    if($count=='0'){
        
  $do1=mysql_query("insert into users (username,id,password,email) Values ('$name','','$key','$email')"); //Inserting the values to database
    }
    
    
    if ( !$do1 ) {
  die("Failed to connect : " . mysql_error());        //Throwing error if insertion not done
 }
    
    
}









?>




<html>
    <body>
        <form method='post'>
            Name <input type='text' name='name'></input><br>
            email <input type='email' name='email'></input><br>
            
          
            chose password <input type='password' name='key'></input><br>
            <button type='submit' name='button'>submit</button> </form></body>
           
            