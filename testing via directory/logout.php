<?php

session_start();
session_unset("user");
unset($_SESSION["user"]);
header("Location: index.php");