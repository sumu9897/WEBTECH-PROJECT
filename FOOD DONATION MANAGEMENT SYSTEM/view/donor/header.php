<?php
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    header("Location: ../../view/donor/login.php");
}


?>

<header>
<h2>DONOR</h2>

            <ul  style="text-align: right;">

                <ul><a
                        href="../../view/donor/profile.php"><?php echo $_SESSION["loginUser_Name"]; ?></a>
                </ul>
                <ul><a href="../../controller/donor/logout_action.php">Logout</a></ul>
            </ul>

    </header>