<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['dpi']) && isset($_POST['email']) && isset($_POST['genero']) && isset($_POST['username']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("users", $_POST['name'], $_POST['surname'], $_POST['dpi'], $_POST['email'], $_POST['genero'], $_POST['username'], $_POST['password'])) {
            echo "Sign Up Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "Algunos datos son requeridos";
?>
