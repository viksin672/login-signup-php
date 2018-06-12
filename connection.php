<?php

 //this file will create the connection between PHP and MySQL 
 error_reporting( ~E_ALL & ~E_DEPRECATED &  ~E_NOTICE ); //avoiding deprecation error
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'your_mysql_username');
 define('DBPASS', 'your_mysql_password');
 define('DBNAME', 'your_database_name');
 
 $connect = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbconnect = mysql_select_db(DBNAME);
 
 if ( !$connect ) {
  die("Failed To Connect : " . mysql_error());
 }
 
 if ( !$dbconnect ) {
  die("Failed To Connect to Database " . mysql_error());
 }
