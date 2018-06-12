

<?php 
//Created By AnkDos

session_start();  //Starting the session 
ob_start();
require 'connection.php';

  $do=mysql_query("select * from users where id=".$_SESSION['ID']); /*Remember during time of login ,I have assigned
                                                                     a session id, loads the user data using it from table(in simple word) */
  
   $do1= mysql_fetch_array($do);
 
  $name= $do1['username'];
   $email= $do1['email'];
  
if ( !$do ) {
  die("Connection failed : " . mysql_error());
 }

//For logging out

if(isset($_GET['logout']))
{
  session_destroy();
  unset ($_SESSION['ID']);
  header("Location: LOGIN.php");
}










?>





<center>
<h3> Welcome User : <?php echo $name; ?>
<h3> Your Email Id : <?php echo $email; ?>
</h3>

 
 
</center>

    <footer>
   
       <a href=?logout >logout</a>
      </footer>



