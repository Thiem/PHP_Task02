<?php
$myDB = new mysqli('localhost', 'root','', 'demo');
if ($myDB->connect_error){
    die('Connect Error (' .$myDB->connect_errno. ')'.$myDB->connect_error);
}
$sql = "SELECT * FROM employees ORDER BY salary";
$result = $myDB->query($sql);
?>
<table cellspacing="2" cellpadding="6" align="center" border="1">
    <tr>
        <td colspan="4">
            <h3 align="center">The information employees</h3>
        </td>
    </tr>
    <tr>
        <td align="center">ID</td>
        <td align="center">Name</td>
        <td align="center">Address</td>
        <td align="center">Salary</td>
    </tr>
    <?php
     while ($row = $result->fetch_assoc() ){
         echo '<tr>';
         echo '<td align="center">';
         echo $row['id'];
         echo "</td><td align='center'>";
         echo $row['name'];
         echo "</td><td align='center'>";
         echo $row['address'];
         echo "</td><td align='center'>";
         echo stripcslashes($row['salary']);
         echo "</td></tr>";
     }
    ?>
</table>
