<?php
//ini_set('display_errors', "On");

//include(dirname(__FILE__)."/php/_config.php");
include(substr(dirname(__FILE__), 0, strpos(dirname(__FILE__), '/www')) . '/www/php/_config.php');

$title = $siteTitle . '';
$pageDescription = $siteDescription;
$categoryName = "top";
$pageName = "";

include("_variables.php");
$isCommon = false;

?>
<?php include("modules/_header.php"); ?>






<?php include("modules/_footer.php"); ?>
