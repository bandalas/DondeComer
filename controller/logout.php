<?php
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("Location: ../login.php");
    }
    else
    {
        header("Location: login.php");
        echo "Session is set";
    }

    if(isset($_GET['logout']))
    {
        echo "Session will be destroyed";
        session_destroy();
        unset($_SESSION['admin']);
        header("Location: ../login.php");
    }
?>