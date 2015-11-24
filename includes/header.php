<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<head>
	<title><?=$title?></title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header">
		<div>
            <h1><?= $pageID ?></h1>
            <img src="images/<?php echo $mylogo ;?>" alt="a dynamic burger header logo" id="logo" />
			<a href="index.html"><img class="logo" src="images/logo.png" width="513" height="84" alt="" title=""></a>
			
			<ul class="navigation">
			<?=makelinks($nav1,'<li>','</li>','<li class="active">')?>
            <? 
    
    //if(isset($_GET['day']))
    if ($title = "ABOUT"){
    
    echo randomize($heros);} else if ($title = "CONTACT"){
echo randomize($heros);}
else 
{echo "";} ?>    
                <!-- <li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li> -->
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="content">
			<div>
				<div>
                     <!--header ends here-->