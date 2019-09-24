<?php
session_start();
unset($_POST['login']);
unset($_POST['pwd']);
if(isset($_SESSION['usuario'])){

}else{
    header('location: ../login/');
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<div class="text-danger text-center">
    <h1>LOGIN USUARIO</h1>
</div>
</body>
</html>