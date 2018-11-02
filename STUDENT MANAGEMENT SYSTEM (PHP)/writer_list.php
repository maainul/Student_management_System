<html>
<head>
        <title>Author List</title>
		<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
		
</head>
<body>
<?php

/* 
        VIEW.PHP
        Displays all data from 'Author list' table
*/

        // connect to the database
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("libnew");

        // get results from database
        $result = mysql_query("SELECT * FROM  writer_info") 
                or die(mysql_error());  
                
        // display data in table
        echo "<p><b>Author Information</b> </p>";
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> 
		    <th>Writer ID</th>
			 <th>Writer Name</th> 
			  <th>Book Name</th> 
			   <th>Edition</th> 
			    <th>contact</th>
			     <th>mail</th>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
            
                echo '<td>' . $row['w_id'] . '</td>';
            
                echo '<td>' . $row['w_name'] . '</td>';
            
                echo '<td>' . $row['book_name'] . '</td>';
            
                echo '<td>' . $row['edition'] . '</td>';
            
                echo '<td>' . $row['phone'] . '</td>';
            
                echo '<td>' . $row['mail'] . '</td>';          
                                                     
				//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>


</body>
</html> 