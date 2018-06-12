<?php

//Created by AnkDos

session_start(); //starting the session
ob_start();

require 'connection.php';    //Creating Connection
if(isset($_POST['button']))    //if the button is set/clicked(in simple word)
{
//taking the form values    
    $email=trim($_POST['mail']);
     $password=strip_tags(trim($_POST['key']));
     
     //taking out the credentials from the database, of the email given in the form 
     $do=mysql_query("select id,password from users where email='$email'");
     $do1= mysql_fetch_array($do);
    
     //Matching the form values to database values
     
     if($do1['password']== $password){   //if the password matches then proceed
         
         $_SESSION['ID']=$do1['id'];      //Assigning the Session id which would be use in other pages to load the current user data
         header("Location: home.php");    //Taking it to the home page
     }
     
     else{                                     //if credentials are wrong
         echo "wrong email or password";   
     }
     
      if ( !$do ) {
  die("Failed to connect : " . mysql_error()); //throwing error if problem is in the Connectivity to MySQL
 }
    
}


?>


<html>
    <body>
        <form method='post'>
            <input type='email' name='mail'></input>
        <input type='password' name='key'></input>
        <button type='submit' name='button'>click</button>
    </body>