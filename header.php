<!DOCTYPE html>
<html>
<meta name="view port" content="width=device-width,initial-scale=1.0">
<head>
<?php wp_head();?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
<title><?php wp_title();?>
</title>
</head>
<body class="b1">

<?php wp_nav_menu(array('container_class'=>'menubar'));?>

