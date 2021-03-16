<?php
require '../../constants/config.php';
require '../../constants/check-login.php';
require '../../constants/uniques.php';

$ad_id = 'AD'.get_rand_numbers(8).'';
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
$datepost = date('M d, Y');

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("INSERT INTO tbl_ads (ad_id, author, title, category, city, ad_condition,  short_desc,  brand,  date_posted) VALUES (:adid, :author, :title, :category, :city, :adcond,  :shortdesc,  :brand,  :datepost)");
    $stmt->bindParam(':adid', $ad_id);
    $stmt->bindParam(':author', $myid);
    $stmt->bindParam(':title', $ad_title);
    $stmt->bindParam(':category', $ad_category);
    $stmt->bindParam(':city', $ad_city);
    $stmt->bindParam(':adcond', $condition);
    
    $stmt->bindParam(':shortdesc', $short_desc);
   
    $stmt->bindParam(':brand', $brand);
   
    $stmt->bindParam(':datepost', $datepost);
    mkdir("../../uploads/ads/$ad_id");
    header("location:../ad-images?node=$ad_id");

    $stmt->execute();
					  
	}catch(PDOException $e)
    {
    echo "La connexion a échoué: " . $e->getMessage();
    }