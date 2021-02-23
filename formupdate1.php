<html>
<head>
<title>Retrieve data</title>
</head>
<body bgcolor="Lightgreen">
<center>
<?php 
include_once 'conn.php';
$sql="SELECT * FROM formid";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>ID</th>
<th>Name</th>
<th>Password</th>
<th>Gender</th>
<th>Email</th>
<th>Phone number</th>
</tr>
<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ID"];?></td>
<td><?php echo $row["NAME"]; ?></td>
<td><?php echo $row["PASSWORD"]; ?></td>
<td><?php echo $row["GENDER"]; ?></td>
<td><?php echo $row["EMAIL"]; ?></td>
<td><?php echo $row["PHONENUMBER1"]; echo $row["PHONENUMBER2"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</tr><br><br><br>
<form method="post" action="formupdate2.php">
Enter the Id to UPDATE: &nbsp&nbsp
<input type="text" name="id">
<br><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
}
else
{
echo "No result found";
}
mysqli_close($conn);
?>
</center>
</body>
</html>