<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="libnew"; // Database name 
$tbl_name="writer_info"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$a=$_POST['w_id'];
$b=$_POST['w_name'];
$c=$_POST['book_name'];
$d=$_POST['edition'];
$e=$_POST['phone'];
$f=$_POST['mail'];


// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$a', '$b','$c','$d', '$e','$f')");
//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
echo "Successful";
    //echo "You Add a new Depertment in Your System";
echo "<BR>";
//echo "<a href='admin_after_login.html'>Add Another</a>";
//echo "<BR>";
//echo "<a href='main.html'>Index Page</a>";

}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>