<?php  
require_once '../../controller/admin/messageInfo.php';

$messages = fetchAllMessages();



?>
<style>
table,td,th{

	border:2px solid black;

	width: 800px;
	background-color: gainsboro;
}
</style>
<?php include '../admin/header.php'; ?>

    <?php include '../admin/sideber.php'; ?>
    <fieldset style="text-align: center;">
        <legend><h2>Messages</h2></legend>
<table>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Message</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody style="text-align: center;">
		<?php foreach ($messages as $i => $message): ?>
			<tr>
				<td><?php echo $message['fName'] ?></a></td>
				<td><?php echo $message['lName'] ?></td>
				<td><?php echo $message['Phone'] ?></td>
				<td><?php echo $message['Email'] ?></td>
                <td><?php echo $message['Message'] ?></td>
				<td><a href="../../controller/admin/deleteMessage.php?id =<?php echo $message['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</fieldset>
<br><br>
<?php include '../admin/footer.php'; ?>