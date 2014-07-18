<?php
require("includes/application_top.php");

include_once("includes/header.php");
?>

<div id="wrapper">
    <h1><?php echo $page['page_title']; ?></h1>

<?php echo $page['content']; ?>

</div>

<?php
include_once("includes/footer.php");