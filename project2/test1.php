<?php
include_once("Student.class.php");
include_once("StudentLists.class.php");
include_once("header.inc.php");


print "<h2>Creating and displaying Student objects</h2>\n";
$studentA = new Student(array('last_name'=>'Johnson','first_name'=>'Robert','age'=>23,'gender'=>'M', 'grades'=>array(44,99,63)));
$studentB = new Student(array('last_name'=>'Smith','first_name'=>'Michelle','age'=>19,'gender'=>'F', 'grades'=>array(88,73,100)));
$studentA->display();
$studentB->display();
print '<div class="clear"></div>'."\n";


include_once("footer.inc.php");