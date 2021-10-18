
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
</head>
<body>
<h1> Page 1 [Home] </h1>


<form action="Page 3 [Transaction History].php" method="POST">

<legend><b>Digital Wallet</b></legend>
<br>
<a href = http://localhost/Digital%20wallet/Page%201%20%5bHome%5d.php> 1.Home</a>      
<a href = http://localhost/Digital%20wallet/Page%202%20%5bAdd%20Beneficiary%5d.php> 2.Add Beneficiary</a>
<a href = http://localhost/Digital%20wallet/Page%203%20%5bTransaction%20History%5d.php> 3.Transaction Hitory</a>
<br>
<br>
<legend><b>Fund Transfer:</b></legend>
<br>
<label for="select category">Select Category :</label>
<select name="select category" required >
<option value="">Select a value</option>
<option>Cash</option>
<option>Bkash</option>
<option>Rocket</option>
<option>Pay Pal</option>
<option>Visa</option>
<option>Other</option>
</select>
<br>
<br>
<label for="to">To :</label>
<select name="to" required >
<option value="">Select a value</option>
<option>Anoy</option>
<option>Fuad</option>
<option>Pritom</option>
<option>Saif</option>
<option>Shazid</option>
<option>Other</option>
</select>
<br>
</br>
<label for="amount">Amount:</label>
<input type="number" name="amount" maxlength="20" required>
<br>
<br>
<input type="submit" value="Submit" >

</body>
</html>
