<html>

<head>

</head>

<body>

<form method="post" action="addEquipment.php">

	<tr>Location Name:  <input type="text" name="gps" /></tr>
	<tr><select name="opCodeSelector">
	  <option value=""></option>
	  <option value=""></option>
	  <option value=""></option>
	  <option value=""></option>
	</select></tr>
	
</form>

<form method="post" action="addOpCode.php">
	<table>
	<tr><td>Description: <input type="text" name="description" /></td></tr>
	
	<tr><td>Field One:<input type="text" name="F1" /></td></tr>
	<tr><td>Field Two:<input type="text" name="F2" /></td></tr>
	<tr><td>Field Three:<input type="text" name="F3" /></td></tr>
	<tr><td>Field Four:<input type="text" name="F4" /></td></tr>	
	<tr><td>Field Five:<input type="text" name="F5" /></td></tr>
	<tr><td>Field Six:<input type="text" name="F6" /></td></tr>
	</table>

</form>



</body>




</html>
