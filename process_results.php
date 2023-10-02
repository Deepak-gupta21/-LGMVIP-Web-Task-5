<?php
$dataFile = 'student_results.csv';

$name = $_POST['name'];
$roll_number = $_POST['roll_number'];
$exam_score = $_POST['exam_score'];

$data = "$name, $roll_number, $exam_score\n";

if (file_put_contents($dataFile, $data, FILE_APPEND | LOCK_EX)) {
    echo "Record added successfully";
} else {
    echo "Error while adding the record";
}
?>
