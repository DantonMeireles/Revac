<?php
session_start();
session_destroy();

header('location: ../pages/php/home.php');
