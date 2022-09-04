
<!--
Age calculator

-->
<form method="post">
<table border="2">
<tr>
<th>Age:</th>
<td><input type="number" name="age"></td>

</tr>
</table>

</form>


<?php
$age=$_POST['age'];
$m=$age*12;
$w=$age*52;
$day=$age*365;
$hour=$age*8760;
$min=$age*525600;
$sec=$age*31540000;
?>
<table border="2">
<tr>
<th>Mounths</th>
<th><?php echo $m?></th>
</tr>

<tr>
<th>Weeks</th>
<th><?php echo $w?></th>
</tr>

<tr>
<th>Days</th>
<th><?php echo $day?></th>
</tr>

<tr>
<th>Hours</th>
<th><?php echo $hour?></th>
</tr>

<tr>
<th>Minutes</th>
<th><?php echo $min?></th>
</tr>

<tr>
<th>Seconds</th>
<th><?php echo $sec?></th>
</tr>




</table>