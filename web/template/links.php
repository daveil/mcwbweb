<?php
	$links = array(
		'home'=>'Home',
		'health-services'=>'Health Services',
		'events'=>'Events',
		//'doctors-corner'=>'Doctor\'s Corner',
		'freedom-wall'=>'Freedom Wall',
	);
?>

<ul>
	<?php foreach($links as $link=>$lable):?>
		<li <?php if($page==$link) echo 'class="active"'?>>
			<a href="<?php echo $link;?>">
				<?php echo $lable;?>
			</a>
		</li>
	<?php endforeach;?>
</ul>