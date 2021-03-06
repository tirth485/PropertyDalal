<?php
    session_start();
    if(session_destroy())
    {
        header("Location: http://".$_SERVER['SERVER_NAME']."/PropertyDalal/index.php");
    }
?>