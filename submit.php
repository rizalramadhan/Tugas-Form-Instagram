<CENTER><table>
<?php
$host="localhost";
$user="root";
$password="";
$email=$_POST ["email"];
$namalengkap=$_POST ["namalengkap"];
$username=$_POST ["username"];
$password=$_POST ["password"];
$password= str_repeat("*",strlen($password));
echo "<h3>MENYIMPAN DATA</h3><HR>";
echo "<tr>
		<td>Email :</td>
		<td>$email</td>
		</tr>";
echo "<tr>
		<td>Nama Lengkap :</td>
		<td>$namalengkap</td>
		</tr>";
echo "<tr>
		<td>Nama Pengguna :</td>
		<td>username</td>
		</tr>";
echo "<tr>	
		<td>password :</td>
		<td>$password</td>
		</tr>";
echo "<TR><TD COLSPAN=3><hr>";
echo "</table><hr>";
?>
</CENTER>
