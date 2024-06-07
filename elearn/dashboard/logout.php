<?php

session_start();
session_destroy();

header("location: ../start/index.php");

exit();

?>