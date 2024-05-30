<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Food Preferences</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Student Food Preferences</h1>
    <table>
        <tr>
            <th>Student Name</th>
            <th>Favorite Food</th>
        </tr>
        <tr>
            <td>Ahmed</td>
            <td>Pringles</td>
        </tr>
        <tr>
            <td>Joe</td>
            <td>Smarties</td>
        </tr>
        <tr>
            <td>Cassie</td>
            <td>Marmite Crisps</td>
        </tr>
        <tr>
            <td>Ben</td>
            <td>Mr Kipling's Cakes</td>
        </tr>
    </table>
    
    
    <title>Student Food Preferences</title>
</head>
<body>
    
    <h1>Student Food Preferences</h1>
    <?php
    $students = array(
        "Ahmed" => "Pringles",
        "Joe" => "Smarties",
        "Cassie" => "Marmite Crisps",
        "Ben" => "Mr Kipling's Cakes"
    );

    foreach ($students as $student => $food) {
        echo "<p>$student likes $food.</p>";
    }
    echo "<br>";

    
function checkNumber($x) {
    if (is_numeric($x)) {
        if ($x > 0) {
            echo "$x is a positive number.";
        } elseif ($x < 0) {
            echo "$x is a negative number.";
        } else {
            echo "You have entered zero.";
        }
    } else {
        echo "Please enter a unumeric value.";
    }
}

checkNumber(6); 
echo "<br>";

checkNumber(-10); 
echo "<br>";
checkNumber("hello");

    ?>
</body>
</html>