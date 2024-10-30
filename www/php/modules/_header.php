<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title><?php echo $title; ?></title>
<meta content="<?php echo $siteKeywords; ?>" name="keywords" />
<meta content="<?php echo $pageDescription; ?>" name="description" />
<meta name="format-detection" content="telephone=no">

<!-- ogp -->
<meta content="<?php echo $title; ?>" property="og:title" />
<meta content="website" property="og:type" />
<meta content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]; ?><?php echo $rootImg; ?>/common/ogp.png" property="og:image" />
<meta content="<?php echo $pageDescription; ?>" property="og:description" />
<meta content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI']; ?>" property="og:url" />
<meta content="<?php echo $siteTitle; ?>" property="og:site_name" />

<!-- twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta content="" name="twitter:site" />
<meta property="twitter:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI']; ?>" />
<meta property="twitter:title" content="<?php echo $title; ?>" />
<meta property="twitter:description" content="<?php echo $pageDescription; ?>" />
<meta property="twitter:image" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"]; ?><?php echo $rootImg; ?>/common/ogp.png" />

<!-- icon -->
<link rel="icon" type="image/png" href="<?php echo $rootImg; ?>/favicons/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?php echo $rootImg; ?>/favicons/favicon.svg" />
<link rel="shortcut icon" href="<?php echo $rootImg; ?>/favicons/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $rootImg; ?>/favicons/apple-touch-icon.png" />
<link rel="manifest" href="<?php echo $rootImg; ?>/favicons/site.webmanifest" />

<!-- css -->
<?php if($vite_dev_standing): ?>
<!-- dev -->
<script type="module" src="<?php echo $vite_dev_path; ?>/<?php echo $vite_input_scss; ?>"></script>
<?php else: ?>
<!-- build -->
<link rel="stylesheet" href="<?php echo $root; ?>/assets/dist/<?php echo $vite_manifest_ary[$vite_input_scss]["file"];?>" />
<?php endif; ?>
</head>


<body class="<?php echo $isCommon ? "category--common " : ""; ?>category--<?php echo $categoryName; ?> page--<?php echo $categoryName; ?>__<?php echo $pageName; ?>">


	<div class="loading">
		<div class="sk-fading-circle">
		<div class="sk-circle1 sk-circle"></div>
		<div class="sk-circle2 sk-circle"></div>
		<div class="sk-circle3 sk-circle"></div>
		<div class="sk-circle4 sk-circle"></div>
		<div class="sk-circle5 sk-circle"></div>
		<div class="sk-circle6 sk-circle"></div>
		<div class="sk-circle7 sk-circle"></div>
		<div class="sk-circle8 sk-circle"></div>
		<div class="sk-circle9 sk-circle"></div>
		<div class="sk-circle10 sk-circle"></div>
		<div class="sk-circle11 sk-circle"></div>
		<div class="sk-circle12 sk-circle"></div>
		</div>
	</div>
	<!-- /loading -->


<div class="wrap">



