<?php
$conn = new mysqli('localhost', 'root', '', 'myDB');
if (! empty($_POST["keyword"])) {
    $sql = $conn->prepare("SELECT * FROM address WHERE address_name LIKE  ? ORDER BY address_name LIMIT 0,6");
    $search = "{$_POST['keyword']}%";
    $sql->bind_param("s", $search);
    $sql->execute();
    $result = $sql->get_result();
    if (! empty($result)) {
        ?>
<ul id="address-list">
<?php
        foreach ($result as $address) {
            ?>
   <li onClick="selectaddress('<?php echo $address["address_name"]; ?>');">
      <?php echo $address["address_name"]; ?>
    </li>
<?php
        }// end for
    ?>
</ul>
    <?php
    }// end if not empty
}
?>
