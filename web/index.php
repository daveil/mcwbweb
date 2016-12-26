<?php 
$page = 'home';
if(isset($_GET['url']))
	$page = $_GET['url'];
$slug = array();
foreach(explode('-',$page) as $token){
	array_push($slug,ucfirst($token));
}
$slug = implode(' ',$slug);
$file = 'pages/'.$page.'.php';
include('template/header.php');
if(file_exists($file))
	include($file);
else
	include('pages/not-found.php');

include('template/footer.php');
?>
