<?php
include_once("Student.class.php");
include_once("StudentLists.class.php");
include_once("header.inc.php");


$studentA = new Student(array('last_name'=>'Fisher','first_name'=>'Billy','age'=>22,'gender'=>'M', 'grades'=>array(55,99,63)));

$students = array(
    array('last_name'=>'Johnson','first_name'=>'Robert','age'=>23,'gender'=>'M', 'grades'=>array(44,99,63)),
    array('last_name'=>'Smith','first_name'=>'Michelle','age'=>19,'gender'=>'F', 'grades'=>array(88,73,100)),
    array('last_name'=>'Walters','first_name'=>'William','age'=>23,'gender'=>'M', 'grades'=>array(99,99,99)),
    array('last_name'=>'Brenner','first_name'=>'Robert','age'=>22,'gender'=>'M', 'grades'=>array(48,50,75)),
    array('last_name'=>'Johnson','first_name'=>'Rita','age'=>26,'gender'=>'F', 'grades'=>array(88,88,88)),
    array('last_name'=>'Wilbon','first_name'=>'Cynthia','age'=>20,'gender'=>'F', 'grades'=>array(93,92,72)),
);

print "<h2>Adding a student and sorting by age</h2>\n";
$list = new StudentLists($students);
$list->addStudent($studentA);
$list->sortStudentsByAgeAscending();
$list->displayAllStudents();
print '<div class="clear"></div>'."\n";


include_once("footer.inc.php");