c<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="libnew"; // Database name 
$tbl_name="book_info"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$a=$_POST['b_id'];
$b=$_POST['writer_id'];
$c=$_POST['page'];
$d=$_POST['price'];

// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$a', '$b', '$c', '$d')");
//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
echo "Successful";
echo "<BR>";
echo "<a href='book_information.html'>Add Another</a>";
echo "<BR>";
echo "<a href='main.html'>Index Page</a>";

}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>