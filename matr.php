<!DOCTYPE html>
<html>
<head>
<title>Matrix task</title>
</head>

<body>
<?php
echo "<table>";
for ($row = 1; $row <= 9; $row++) {
  echo "<tr>";
  for ($col = 1; $col <= 9; $col++) {
  if($col == 1 || $row == 1) 
	{ 
		echo "<th>".$row *$col."</th>";
	}
  else 
	{
		echo "<td>".$row *$col."</td>";
	}
  }
  echo "</tr>";
}
echo "</table>";
?>
</body>
</html>