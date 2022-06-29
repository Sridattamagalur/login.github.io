<?php session_start(); 

        if(!isset($_SESSION['UserData']['Username']))
        {
                header("location:login.php");
                exit;
        }
?>
WELCOME to the dashboard <?php echo $_SESSION['UserData']['Username'];?>
</br>
<a href="logout.php">LOGOUT</a>