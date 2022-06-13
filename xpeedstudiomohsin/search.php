<?php

 include('db-connection.php');
 $search_by_id=$_POST['search-by-id'];
 $search_by_date=$_POST['search-by-date'];
$database = new Database();
$database->connect_db();
$result = $database->search($search_by_id,$search_by_date);
while($row = mysqli_fetch_assoc($result))
{
?>  
 
	echo "<tr>";
    echo "<td>"<?php echo $row["id"]; ?></td>;
    echo "<td>"<?php echo $row["amount"]; ?></td>;
    echo "<td>"<?php echo $row["buyer"]; ?></td>;
    echo "<td>"<?php echo $row["receipt-id"]; ?></td>;
    echo "<td>"<?php echo $row["items"]; ?></td>;
    echo "<td>"<?php echo $row["buyer-email"]; ?></td>;
    echo "<td>"<?php echo $row["buyer-ip"]; ?></td>;
    echo "<td>"<?php echo $row["note"]; ?></td>;
    echo "<td>"<?php echo $row["city"]; ?></td>;
    echo "<td>"<?php echo $row["phone"]; ?></td>;
    echo "<td>"<?php echo $row["hash_key"]; ?></td>;
    echo "<td>"<?php echo $row["entry_at"]; ?></td>;
    echo "<td>"<?php echo $row["entry_by"]; ?></td>;
	echo "</tr>";

<?php 
} 
?>


?>