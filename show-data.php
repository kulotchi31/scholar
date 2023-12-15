<?php
include("connect.php");
$fetch_query = mysqli_query($con, "select * from students");
$row = mysqli_num_rows($fetch_query);
if($row>0)
{
	while($res = mysqli_fetch_array($fetch_query))
	{?>
       <tr>
       	<td><?php echo $res['id']; ?></td>
       	<td><?php echo $res['fname']; ?></td>
       	<td><?php echo $res['lname']; ?></td>
        <td><?php echo $res['mname']; ?></td>
       	<td><?php echo $res['birth']; ?></td>
       	<td><?php echo $res['age']; ?></td>
       	</tr>
<?php	}
}
?>