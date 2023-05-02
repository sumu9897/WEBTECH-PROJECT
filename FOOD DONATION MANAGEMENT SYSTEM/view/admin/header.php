<?php
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    header("Location: ../../view/admin/admin_login.php");
}


?>

<header>
    <h2>ADMIN</h2>


            <ul style="text-align: right;">

                <ul><a
                        href="../../view/admin/profile.php"><?php echo $_SESSION["loginUser_Name"]; ?></a>
                </ul>
                <ul><a href="../../controller/admin/logout_action.php">Logout</a></ul>
            </ul>

    </header>