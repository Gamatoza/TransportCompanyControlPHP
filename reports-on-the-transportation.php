<?php


$mysqli = new mysqli('localhost','root','qwerty','CompanyDataBase');
$result = $mysqli->query("SELECT * FROM Employee");
$some = $result->fetch_assoc();
echo $some['Password'];
exit();
echo "<table width='100%'>";
echo "<tr><td>pole1</td><td>pole2</td><td>pole3</td><td>pole4</td></tr>";

while ($row = $result->fetch_assoc()){
$Client=$row['Client'];
$Loader=$row['Loader'];
$FarRobber=$row['FarRobber'];
$From=$row['From'];
$From=$row['To'];
echo "<tr><td>$Client</td><td>$Loader</td><td>$FarRobber</td><td>$From</td><td>$To</td></tr>";
}
echo "</table>";

?>