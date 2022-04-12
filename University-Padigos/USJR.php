<?php
    require_once'init.php';

    $university = new University('University of San Jose - Recoletos');

    $university->addCourseList(new ClassSched(11046, 'Web Application', '9:00am', '10:30am'));
    $university->addCourseList(new ClassSched(11067, 'Mobile Application', '4:30pm', '6:00pm'));
    
    $classSched=$university->courseList[0];
    $classSched2=$university->courseList[1];

    //Teachers
    $classSched->setTeacherList(new Teacher('Mr.', 'Roderick', 'Bandalan'));
    $classSched2->setTeacherList(new Teacher('Mr.', 'Daniel', 'Seldura'));
    
    //Class1Students
    $classSched->setStudentList(new Student('Albite', 'Kate Charmaine'));
    $classSched->setStudentList(new Student('Oralde', 'Zeki Yul'));
    $classSched->setStudentList(new Student('Padigos', 'Krystel Niña'));
    $classSched->setStudentList(new Student('Parales', 'Maegan Epiphanie'));
    $classSched->setStudentList(new Student('Pinote', 'Sean Milbert'));

    //Class2Students
    $classSched2->setStudentList(new Student('Lopez', 'Hazel'));
    $classSched2->setStudentList(new Student('Mutya', 'Ruby Mae'));
    $classSched2->setStudentList(new Student('Nacua', 'Bessie Jane'));
    $classSched2->setStudentList(new Student('Salazar', 'Mackemzie'));
    $classSched2->setStudentList(new Student('Tuso', 'Vonne Harvey'));

    echo 'Welcome to ' .$university->getSchool(). '<br>';
    for($i=0; $i<count($university->getCourseList()); $i++){
        $classSched = $university->courseList[$i];
        $teacherList=$classSched->getTeacherList();

        for($x=0; $x<count($teacherList); $x++){
            echo '<br><br>'.$classSched->getCourseNumber().' '.$classSched->getCourseName().' '.$classSched->getCourseStartTime().'-'.$classSched->getCourseEndTime().'<br>';
            echo 'Teacher: '.$teacherList[$x]->getTeacherTitle().'. '.$teacherList[$x]->getTeacherFirstName().' '.$teacherList[$x]->getTeacherLastName().'<br><br>';
            
        $studentList=$classSched->getStudentList();
            echo 'Students: <br>'; 
            for($k=0; $k<count($studentList); $k++){
                echo ''.$studentList[$k]->getStudentLastName().', '.$studentList[$k]->getStudentFirstName().'<br>';
            }
        }
    }