<?php
require '../../constants/config.php';
require '../../constants/check-login.php';

$ad_id = $_POST['ad_id'];
$ad_title = ucwords($_POST['title']);
$ad_category = $_POST['category'];
$ad_city = $_POST['city'];
$condition = $_POST['condition'];




if (isset($_POST['brand'])) {
$brand = ucwords($_POST['brand']);
}else{
$brand = "";	
}


$short_desc = ucfirst($_POST['shortdesc']);

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("UPDATE tbl_ads SET title = :title, category = :category, city = :city, ad_condition = :adcond,  short_desc = :shortdesc, brand = :brand,  WHERE ad_id = :adid AND author = :author");

    $stmt->bindParam(':title', $ad_title);
    $stmt->bindParam(':category', $ad_category);
    $stmt->bindParam(':city', $ad_city);
    $stmt->bindParam(':adcond', $condition);


    $stmt->bindParam(':shortdesc', $short_desc);
    
  
    $stmt->bindParam(':brand', $brand);
  
    $stmt->bindParam(':adid', $ad_id);
    $stmt->bindParam(':author', $myid);

	$stmt->execute();

	$_SESSION['reply'] = "008";
	header("location:../edit-ad?node=$ad_id");
					  
	}catch(PDOException $e)
    {
    echo "La connexion a échoué: " . $e->getMessage();
    }

    ?>