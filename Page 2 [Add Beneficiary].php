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
<a href = Page 1 [Home].php> 1.Home</a>      
<a href = Page 2 [Add Beneficiary].php> 2.Add Beneficiary</a>
<a href = Page 3 [Transaction Hitory].php> 3.Transaction Hitory</a>
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
echo "<th>beneficiaryname </th>";
echo "<th>mobileno </th>";
echo "</tr>";
echo "<tr>";
echo "<td>$a</td>";
echo "<td>$b</td>";

echo "</tr>";
	

echo "</table>";
?>
</body>
</html>