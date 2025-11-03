<?php 
//record store test
require 'data/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Store Test</title>
</head>
<body>
    <h1>Record Formats</h1>
    <ul>
        <h2>Unit Test 1 — Formats</h2>
        <?php 
        $formats = formats_all();
        echo '<table>';
        echo '<tr><th>ID</th><th>Name</th></tr>';
        foreach ($formats as $format) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($format['id']) . '</td>';
            echo '<td>' . htmlspecialchars($format['name']) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </ul>
</body>
</html>