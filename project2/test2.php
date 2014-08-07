<?php
include_once("Student.class.php");
include_once("StudentLists.class.php");
include_once("header.inc.php");



$students = array(
    array('last_name'=>'Johnson','first_name'=>'Robert','age'=>23,'gender'=>'M', 'grades'=>array(44,99,63)),
    array('last_name'=>'Smith','first_name'=>'Michelle','age'=>19,'gender'=>'F', 'grades'=>array(88,73,100)),
    array('last_name'=>'Walters','first_name'=>'William','age'=>23,'gender'=>'M', 'grades'=>array(99,99,99)),
    array('last_name'=>'Brenner','first_name'=>'Robert','age'=>22,'gender'=>'M', 'grades'=>array(48,50,75)),
    array('last_name'=>'Johnson','first_name'=>'Rita','age'=>26,'gender'=>'F', 'grades'=>array(88,88,88)),
    array('last_name'=>'Wilbon','first_name'=>'Cynthia','age'=>20,'gender'=>'F', 'grades'=>array(93,92,72)),
);

print "<h2>All students unsorted</h2>\n";
$list = new StudentLists($students);
$list->displayAllStudents();
print "<h2>All students sorted by last name</h2>\n";
$list->sortStudentsByLastName();
$list->displayAllStudents();
print '<div class="clear"></div>'."\n";
print "<h2>All students sorted by first name</h2>\n";
$list->sortStudentsByFirstName();
$list->displayAllStudents();
print '<div class="clear"></div>'."\n";

print "<h2>All students sorted by average grade (ascending)</h2>\n";
$list->sortStudentsByAverageGradeAscending();
$list->displayAllStudents();
print '<div class="clear"></div>'."\n";
print "<h2>All students sorted by average grade (descending)</h2>\n";
$list->sortStudentsByAverageGradeAscending();
$list->displayAllStudents();
print '<div class="clear"></div>'."\n";



include_once("footer.inc.php");