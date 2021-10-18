<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Beneficiary</title>
<style>
		table, thead, tbody, tr, th, td {
		border: 1px solid black;
		}
	</style>
</head>
<body>

<h1> Page 2 [Add Beneficiary] </h1>
<form action="Page 2 [Add Beneficiary].php" method="POST">

<legend><b>Digital Wallet</b></legend>
<br>
<a href = http://localhost/Digital%20wallet/Page%201%20%5bHome%5d.php> 1.Home</a>      
<a href = http://localhost/Digital%20wallet/Page%202%20%5bAdd%20Beneficiary%5d.php> 2.Add Beneficiary</a>
<a href = http://localhost/Digital%20wallet/Page%203%20%5bTransaction%20History%5d.php> 3.Transaction Hitory</a>
<br>
<br>
<legend><b>Add Beneficiary:</b></legend>
<br>
<label for="beneficiaryname">Beneficiary Name:</label>
<input type="text" name="beneficiaryname" maxlength="20" required>
<label for="mobileno">Mobile No:</label>
<input type="text" name="mobileno" maxlength="20" required>
<br>
<br>
<input type="submit" value="Submit" >
<br>
<br>
<?php
$a=$_POST['beneficiaryname'];
$b=$_POST['mobileno'];

echo "<table border='1'>";
echo "<tr>";
echo "<th>Beneficiary name </th>";
echo "<th>Mobile no </th>";
echo "</tr>";
echo "<tr>";
echo "<td>$a</td>";
echo "<td>$b</td>";

echo "</tr>";
	

echo "</table>";
?>
</body>
</html>
