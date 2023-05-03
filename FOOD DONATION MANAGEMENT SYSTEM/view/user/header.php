<?php
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    // die("You are not logged in");
    header("Location: ../../view/donor/login.php");
}


?>

<header>

<h2>USER</h2>

            <ul style="text-align: right;">

                <ul><a
                        href="../../view/user/profile.php"><?php echo $_SESSION["loginUser_Name"]; ?></a>
                </ul>
                <ul><a href="../../controller/user/logout_action.php">Logout</a></ul>
            </ul>

    </header>