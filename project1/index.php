<?php include_once("header.inc.php"); ?>

    <div id="project">
    <h2>Project #1</h2>
    <p>

       &mdash; <a href="#">Download skeleton code from github</a>
    </p>

    <hr />

    <h4>Project Description:</h4>
    <p>You will be writing a code that manages a list of students in a class. You will be responsible for writing
    two PHP classes to perform the following code.  You will also be provided with the skeleton code for this project
    which will have all the necessary code to test your code. </p>

    <h4>Project Objectives:</h4>

    <ul>
        <li>Show understanding of multi-dimensional arrays</li>
        <li>Show understanding of printf</li>
        <li>Show understanding of basic Object-Oriented Programming</li>
        <li>Show understanding of basic error detection</li>
    </ul>

    <h4>Project Requirements:</h4>

    <p>You are allowed to discuss and get advice from other students or programmers,
        but you must write all of your own code. Don't copy and paste anyone else's code. Cheating will
        result in an automatic zero for this project.</p>



        <hr />

        <h3>Student class (Student.class.php)</h3>

    <h4>Constructor takes an array parameter of the following format:</h4>
    <pre>
    array(
        'first_name' => 'John',
        'last_name' => 'Smith',
        'age' => 25,
        'gender' => 'M',
        'grades' => array(95,80,99)
    )
    </pre>



    <h4>Class should have the following functions:</h4>
    <pre>
    <strong>addGrade($grade)</strong> 		// should add another grade to the student's record

    <strong>getFirstName()</strong> 		// Should return the student's first name

    <strong>getLastName()</strong>		// Should return the student's last name

    <strong>getAge()</strong> 			// Should return the student's age

    <strong>getGender()</strong> 		// should return the student's gender

    <strong>getAllGrades()</strong> 		// should return an array of all the student's grades

    <strong>getLowestGrade()</strong> 		// should return the student's lowest grade

    <strong>getHighestGrade()</strong> 		// should return the student's highest grade

    <strong>getAverageGrade()</strong> 		// should return the student's average grade

    <strong>getLetterGrade()</strong>		// converts numeric average to letter grade

    <strong>display()</strong> 			// should output the student's info in the following format
                                    using printf only. All grades should be displayed to 1
                                    significant digit.  So for example if a student's
                                    average is 93.99551, then you would only display 93.9
    <blockquote>
        &lt;div class="student"&gt;
            &lt;div class="name"&gt;{FIRST} {LAST} ({AGE}/{GENDER})&lt;/div&gt;
            &lt;div class="grades"&gt;
                &lt;dl&gt;
                    &lt;dt&gt;{GRADE 1}&lt;/dt&gt;
                    &lt;dt&gt;{GRADE 2}&lt;/dt&gt;
                    &hellip;
                    &lt;dt&gt;{GRADE n}&lt;/dt&gt;
                &lt;/dl&gt;
            &lt;/div&gt;
            &lt;div class="grade-summary"&gt;
                Lowest Grade: {LOWEST GRADE}&lt;br /&gt;
                Highest Grade: {HIGHEST GRADE}&lt;br /&gt;
                Average Grade: {AVERAGE GRADE}&lt;br /&gt;
                Letter Grade: {LETTER GRADE}
            &lt;/div&gt;
        &lt;/div&gt;</blockquote>

    </pre>



        <hr />

    <h3>StudentList class (StudentList.class.php)</h3>

    The constructor should take a 2-dimensional array of student data with the following format:

    <pre>
    array(
        array(
            'first_name' => 'John',
            'last_name' => 'Smith',
            'age' => 25,
            'gender' => 'M',
            'grades' => array(95,80,99)
        ),
        array(
            'first_name' => 'Susan',
            'last_name' => 'Roberts',
            'age' => 19,
            'gender' => 'F',
            'grades'=> array(100,80,73)
        ),
    );
    </pre>

    <p>Upon initialization, it should instantiate new Student objects for each student.</p>


    <h4>Class should have the following functions:</h4>
    <pre>
    <strong>addStudent($student)</strong> 		// Takes Student Object as parameter and
                                            adds it to list of students

    <strong>getStudentWithHighestAverage()</strong>	// Retrieves student with highest average

    <strong>getStudentWithLowestAverage()</strong>	// Retrieves student with lowest average

    <strong>getStudentWithMaximumGrade()</strong> 	// Retrieves student that has the single highest grade

    <strong>getStudentWithMinimumGrade()</strong> 	// Retrieves student that has the single lowest grade

    <strong>sortStudentsByLastName()</strong>            // Sorts users by last name

    <strong>sortStudentsByFirstName()</strong>           // Sorts users by first name

    <strong>sortStudentsByAgeAscending()</strong>        // Sorts users by age in ascending order

    <strong>sortStudentsByAgeDescending()</strong>       // Sorts users by age in descending order

    <strong>displayAllStudents()</strong>                // Displays all students

    </pre>

    </div>

<?php include_once("footer.inc.php"); ?>