<?php
$dataFile = 'student_results.csv';

// Read the data from the CSV file
$data = file($dataFile, FILE_IGNORE_NEW_LINES);

// Start building the HTML table
echo "<h2>Student Results</h2>";
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Roll Number</th><th>Exam Score</th></tr>";

foreach ($data as $line) {
    list($name, $roll_number, $exam_score) = explode(',', $line);
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$roll_number</td>";
    echo "<td>$exam_score</td>";
    echo "</tr>";
}

// Close the HTML table
echo "</table>";
?>
