<html>
<head>
        <title>Book List</title>
		<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
<?php

/* 
        VIEW.PHP
        Displays all data from 'Book list' table
*/

        // connect to the database
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("libnew");

        // get results from database
        $result = mysql_query("SELECT * FROM  book_info") 
                or die(mysql_error());  
                
        // display data in table
        echo "<p><b>All Book Information</b> </p>";
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> 
		    <th>Book Serial</th>
			 <th>Writter ID</th>  
			      <th>pages</th> 
				   <th>price</th>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['b_id'] . '</td>';
                echo '<td>' . $row['writer_id'] . '</td>';
                echo '<td>' . $row['page'] . '</td>';               
                echo '<td>' . $row['price'] . '</td>';
                
                
                
				//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>


</body>
</html> 