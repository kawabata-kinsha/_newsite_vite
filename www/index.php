<?php
ini_set('display_errors', "On");

include(dirname(__FILE__)."/php/_config.php");
include(dirname(__FILE__)."/php/_functions.php");

$title = $siteTitle . '';
$pageDescription = $siteDescription;
$categoryName = "top";
$pageName = "";

include(dirname(__FILE__)."/php/_variables.php");
$isCommon = false;

?>
<?php include("modules/_header.php"); ?>






<?php include("modules/_footer.php"); ?>
