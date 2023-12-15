<?php
include('connect.php');
$catname = $_POST['cat_name'];

if($catname!='All')
{
	$cond = "'$catname'";
}
else
{
	$cond = 0;
}

$fetch_query = mysqli_query($con, "select * from students where category= $cond");
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
       	<td><?php echo $res['phone']; ?></td>
       	<td><?php echo $res['age']; ?></td>
       </tr>
<?php	}
}
?>