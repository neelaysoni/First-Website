<?php

$conn= mysqli_connect("localhost", "root", "","mydb");
$sql ="SELECT name,subject,marks,contactno FROM student where name like '%".$_POST['q']."%'";
	echo "<tr>
			<th>Name</th>
			<th>Subject</th>
			<th>Marks</th>
			<th>contact no</th>
			</tr>";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result))
{
	echo "  <tr>
		    <td>".$row["name"]."</td>
		    <td>".$row["subject"]."</td>	
		    <td>".$row["marks"]."</td>
		    <td>".$row["contactno"]."</td>
		    </tr>";
}
 }
 else

 echo '<tr><th colspan="4">No records</th></tr>	 ';

?>