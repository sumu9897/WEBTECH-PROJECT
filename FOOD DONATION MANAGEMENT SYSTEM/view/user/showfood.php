<?php  
require_once '../../controller/donor/manage_action.php';

$food = fetchfood($_GET['id']);






?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php include '../user/header.php'; ?>

    <?php include '../user/sideber.php'; ?>

<fieldset>



   <legend><?php echo $food['name'] ?></legend> 
   <label>Food Item : </label><a href="showfood.php?id=<?php echo $food['ID'] ?>"><?php echo $food['name'] ?></a><br><br>
    <label>Descriotion : </label><?php echo $food['description'] ?><br><br>
    <label>Pickup Date : </label><?php echo $food['date'] ?><br><br>
    <label>Pickup Address : </label><?php echo $food['address'] ?><br><br>
    <label>Contact Person : </label><?php echo $food ['person'] ?><br><br>
    <label>Phone Number : </label><?php echo $food ['phone'] ?><br><br>
    <label>Image : </label><img width="100px" src="uploads/<?php echo $food['image'] ?>" alt="<?php echo $food['Name'] ?>"><br><br>
    

    </fieldset>
<?php include '../user/footer.php'; ?>


</body>
</html>
