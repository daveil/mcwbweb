<?php 
$page = 'home';
if(isset($_GET['url']))
	$page = $_GET['url'];
$file = 'pages/'.$page.'.php';
include('template/header.php');
if(file_exists($file))
	include($file);
else
	include('pages/not-found.php');
include('template/footer.php');
?>
