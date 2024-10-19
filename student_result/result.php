<?php
function calculateResult($marks)
{
    $totalMarks=0;
    $subjectCount=count($marks);

    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Enter a valid mark between 0 and 100";
            return;
        }
        if ($mark < 33) {
            echo "Result : Failed";
            return;
        }
    }
    
    $totalMarks =array_sum($marks);
    $averageMarks=$totalMarks/$subjectCount;


    // the result based on average marks using switch 

    switch (true) {
        case ($averageMarks >= 80):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70):
            $grade = 'A';
            break;
        case ($averageMarks >= 60):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50):
            $grade = 'B';
            break;
        case ($averageMarks >= 40):
            $grade = 'C';
            break;
        case ($averageMarks >= 33):
            $grade = 'D';
            break;
        default:
            $grade = 'F';
            break;
    }


  // Output result
  echo "Total Marks: " . $totalMarks . "\n";
  echo "Average Marks:"  . $averageMarks . "\n";
  echo "Grade: " . $grade . "\n";
}


$marks=[89,80,55,62,75];
calculateResult($marks);
