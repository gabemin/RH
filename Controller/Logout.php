<?php
session_destroy();
unset($_SESSION['id']);
header('location: ../login/');