<?php
require 'config.php';

if(isset($_POST['user_name'])) {

	 $name = $_POST['user_name'];

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT username FROM tbl_users WHERE username = :username UNION SELECT username FROM tbl_admin WHERE username = :username");
    $stmt->bindParam(':username', $name);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);

    if ($rec > 0) {
   print '<div class="alert alert-warning">Ce nom d\'utilisateur est déjà enregistré</div>';

    }else{


    }

					  
	}catch(PDOException $e)
    {

    }

}


if(isset($_POST['user_email'])) {

	 $email = $_POST['user_email'];

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT email FROM tbl_users WHERE email = :email UNION SELECT email FROM tbl_admin WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);

    if ($rec > 0) {
     print '<div class="alert alert-warning">L\'email est déjà enregistré</div>';

    }else{


    }

					  
	}catch(PDOException $e)
    {

    }

}


