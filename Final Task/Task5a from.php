<!DOCTYPE html>
<html>
<head>
    <title>Task 5A - Degree Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        fieldset { width: 300px; }
        legend { font-weight: bold; font-size: 18px; }
        input[type="submit"] { padding: 4px 12px; margin-top: 8px; }
    </style>
</head>
<body>

<h3>Task 5A - Degree (Displays on Handler Page)</h3>

<form action="task5a_handler.php" method="post">
    <fieldset>
        <legend>DEGREE</legend>
        <input type="checkbox" name="degree[]" value="SSC" /> SSC
        <input type="checkbox" name="degree[]" value="HSC" /> HSC
        <input type="checkbox" name="degree[]" value="BSc" /> BSc
        <input type="checkbox" name="degree[]" value="MSc" /> MSc
        <br><hr>
        <input type="submit" value="Submit" />
    </fieldset>
</form>

</body>
</html>