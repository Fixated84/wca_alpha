<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
	  width: 100%;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','westcoastauto');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"customers");
$sql="SELECT * FROM customers WHERE customer_id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Email</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
   echo "<td>" . $row['address'] . "</td>";
   echo "<td>" . $row['phone'] . "</td>";
     echo "<td>" . $row['email'] . "</td>";
  //  echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>