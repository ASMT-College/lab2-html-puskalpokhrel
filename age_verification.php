<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h3, h4 {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['age'])) {
        $age = $_GET['age'];
        if ($age < 18) {
            echo "<h3 style='color: red'>You are not eligible!</h3>";
            $remainingAge = 18 - $age;
            echo "<h4>Remaining age to become eligible: $remainingAge</h4>";
        } else {
            echo "<h3 style='color: green'>You are eligible!</h3>";
        }
    } else {
        echo "<h3 style='color: red'>Age is not set!</h3>";
    }
    ?>
</body>
</html>
