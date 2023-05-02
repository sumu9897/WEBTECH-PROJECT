<?php  
require_once '../../controller/admin/user_action.php';

$users = fetchAllusers();



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
		table,td,th{
			border:2px solid black;
            width: 800px;
		}
	</style>
</head>
<body>
<?php include './header.php'; ?>

    <?php include './sideber.php'; ?>
    

<fieldset>
    <legend>
        <h3>REGISTED USER DETAILS</h3>
    </legend>


<table>
	<thead>
		<tr>

			<th>Name</th>
			<th>E-mail</th>
            <th>Gender</th>
			<th>Phone Number</th>
            <th>Address</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody style="text-align: center;">
        
		<?php foreach ($users as $i => $user): ?>
			<tr>
				<td><?php echo $user['user_name'] ?></td>
				<td><?php echo $user['user_mail'] ?></td>
                <td><?php echo $user['user_gender'] ?></td>
				<td><?php echo $user ['user_phone'] ?></td>
                <td><?php echo $user ['user_address']?></td>
				<td><a href="showuser.php?id=<?php echo $user['user_id'] ?>">user Details</a></td>
			</tr>
		<?php endforeach; ?>
	

	</tbody>
	

</table>

</fieldset><br>
<?php include './footer.php'; ?>
</body>
</html>
