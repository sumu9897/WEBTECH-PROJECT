<?php  
require_once '../../controller/admin/donor_action.php';

$donors = fetchAlldonors();



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<?php include './header.php'; ?>

    <?php include './sideber.php'; ?>
    

<fieldset>
    <legend>
        <h3>FOOD DONOR DETAILS</h3>
    </legend>


<table>
	<thead>
		<tr>

			<th>Name</th>
			<th>Email</th>

			<th>Phone Number</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody style="text-align: center;">
        
		<?php foreach ($donors as $i => $donor): ?>
			<tr>
				<td><?php echo $donor['donor_name'] ?></td>
				<td><?php echo $donor['donor_mail'] ?></a></td>
				<td><?php echo $donor ['donor_phone'] ?></td>
				<td><a href="showdonor.php?id=<?php echo $donor['donor_id'] ?>">donor Details</a></td>
			</tr>
		<?php endforeach; ?>
	

	</tbody>
	

</table>

</fieldset><br>
<?php include './footer.php'; ?>
</body>
</html>
