<!DOCTYPE HTML>
<head>
	<meta property="og:title" content="<?php echo $siteTitle; ?>"/>
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo $url; ?>">
	<meta property="og:image" content="<?php echo $urlImg; ?>">
	<meta property="og:description" content="<?php echo $desc; ?>">
	<link rel="image_src" href="<?php echo $urlImg; ?>" / ><!--formatted-->
	
	<meta content="width=300, user-scalable=yes" name="viewport">
	<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="<?php echo $desc; ?>"/>
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />	
	<meta charset="UTF-8">

	<title><?php echo $siteTitle; ?></title>
	<link rel="icon" href="<?php echo $lvl; ?><?php echo $images; ?>/icon.png" sizes="32x32" >	
	<link rel="stylesheet" type="text/css" href="<?php echo $lvl; ?><?php echo $css; ?>" />
	<?php require_once('LIB/lib.php'); ?>	
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--FOOTER-->
	<script type="text/javascript" src="<?php echo $lvl; ?><?php echo $js; ?>"></script>
</head>