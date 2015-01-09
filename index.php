<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    
    <body>
        <?php
        include('student.php');

        // Initialize students as an array
        $students = array();

        
        // Create informaton for first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        
        // Add first student into the students array
        $students['j123'] = $first;
        
        // Create informaton for second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        
        // Add second student into the students array
        $students['a456'] = $second;
        
        
        // Create informaton for third student
        $third = new Student();
        $third->surname = "Padua";
        $third->first_name = "George";
        $third->add_email('home','George@braniacs.com');
        $third->add_email('work1','g_padua@bcit.ca');
        $third->add_email('work2','george@physics.mit.edu');
        $third->add_grade(100);
        $third->add_grade(100);
        $third->add_grade(100);
        
        // Add third student into the students array
        $students['a853'] = $third;
        
        
        // Sort the students alphabetically by their first name
        ksort($students);
        
        
        // Loop through all students in students array and print on screen
        foreach($students as $student)
            echo $student->toString();

        ?>
    </body>
</html>
