<?php
session_start();

if(!isset ($_SESSION['autenticado'])  ){
header('Location: index.php ? login=erro2');
echo $_SESSION['autenticado'];
}
?>