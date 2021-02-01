<?php
//closes session when user clicks log out
    session_start();
    session_unset();
    session_destroy();
    header("Location: ./index.php?logout");