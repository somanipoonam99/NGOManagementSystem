<html>
<body bgcolor="gold">
<center>
<h1> Donation Report</h1>
<br>
<?php require_once 'main/dbconnect.php' ?>
<?php
$sql="SELECT * FROM `donation`";
$run=mysqli_query($conn,$sql);
?>
<table align="center" border="1">
<tr>
<th>  Donation Id</th>
<th>  First Name</th>
<th>  Last Name</th>
<th> Mobile No</th>
<th>Email_Id</th>
<th> state</th>
<th>city</th>
<th> Address</th>
<th> Donation type</th>
<th>Donation Message</th>
<th> Donation Date</th>
</tr>
<?php
while($data=mysqli_fetch_assoc($run))
{
?>
<tr>
<td><?php echo $data['donationid']; ?></td>
<td><?php echo $data['fname']; ?></td>
<td><?php echo $data['lname']; ?></td>
<td><?php echo $data['phonenumber']; ?></td>
<td><?php echo $data['city']; ?></td>
<td><?php echo $data['state']; ?></td>
<td><?php echo $data['address']; ?></td>
<td><?php echo $data['donationtype']; ?></td>
<td><?php echo $data['donationmessage']; ?></td>
<td><?php echo $data['donationdate']; ?></td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>