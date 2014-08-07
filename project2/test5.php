<?php
include_once("Student.class.php");
include_once("StudentLists.class.php");
include_once("header.inc.php");


$students = array(
    array('last_name'=>'Johnson','age'=>23,'gender'=>'M', 'grades'=>array(44,99,63)),
    array('last_name'=>'Smith','first_name'=>'Michelle','gender'=>'F', 'grades'=>array(88,73,100)),
    array('last_name'=>'Walters','first_name'=>'William','age'=>23,'gender'=>'M'),
    array('last_name'=>'Brenner','first_name'=>'Robert','age'=>22,'gender'=>'M', 'grades'=>array(48,50,75)),
    array('first_name'=>'Rita','age'=>26,'gender'=>'F', 'grades'=>array(88,88,88)),
    array(),
    null,
    "xyx"
);


print "<h2>Debug Tests:</h2>\n";

$student = new Student(null);
$student = new Student('xyz');
$student = new Student(12355);
$student = new Student(array('xyz',555));


$list = new StudentLists(array(array('xyz','zyz'),array('pfwp','fjpwepfw')));
$list = new StudentLists(array('xyz','zyz'));
$list = new StudentLists(null);

$list = new StudentLists($students);


$list->getStudentWithHighestAverage();
$list->getStudentWithLowestAverage();
$list->getStudentWithMaximumGrade();
$list->getStudentWithMinimumGrade();
$list->sortStudentsByAgeAscending();
$list->sortStudentsByAgeDescending();
$list->sortStudentsByAverageGradeAscending();
$list->sortStudentsByAverageGradeDescending();
$list->sortStudentsByFirstName();
$list->sortStudentsByLastName();



print "<h3>If you see no errors on this page and your code works for all other tests,<br />
            then you should be almost done with this project.<br /><br />

            Remember to document your code!</h3>\n";



print '<div class="clear"></div>'."\n";

include_once("footer.inc.php");