<?php
// Default Values
$prefix = "North of England Rat Society";//Default page prefix
$affix 	= "";//Default page affix
// Make page TITLE
$head_title = $prefix.$affix;
global $page_title;
global $page_title_override;
if(isset($page_title)) $head_title = $prefix.": ".$page_title.$affix;
if(isset($page_title) && isset($page_title) && $page_title_override == true) $head_title = $page_title;

// Make BODY css classes
$navEl = explode('/',$_SERVER['REQUEST_URI']);
$bodyclasses = "";
foreach($navEl as $item){
	if(empty($item) || $item == "index.php") continue;
	$bodyclasses .= "$item ";
}
$bodyclasses = rtrim($bodyclasses);
if(empty($bodyclasses)) $bodyclasses = "homepage";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/favicon.ico" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<title><?php echo $head_title; ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<!--<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">-->
	<link href="/assets/css/ners.css" rel="stylesheet">
</head>
<body class="<?php echo $bodyclasses; ?>">
	<div id="wip">Site Under Conscruction - Many links won't work, and submission forms maybe be funky for a bit.</div>
	<a href="#content" class="sr-only sr-only-focusable" id="skippy">Skip to main content</a>
	
	<div class="container">
		<div class="header clearfix">
			<div class="row">
				<div class="col-3 headerimg">
					<h1><a href="/">North of England Rat Society</a></h1>
				</div>
				<div class="col-6 pt-3 newsupdate">
					<?php inc('news'); ?>
				</div>
				<div class="col pt-3 mr-2 logo hidemobile">
					<img src="/assets/img/logo.gif">
				</div>
			</div>
			<div class="tagline hidemobile">Promoting excellence in the care and breeding of fancy rats</div>
			
		</div>
		<div class="contentcontainer row">
			<?php inc('navigation'); ?>
			<div id="content" class="content col-lg-9 col-md-12 col-sm-12 col-xs-12 pt-2">
