<!DOCTYPE html>
<html>
<head>
    <title>Task 2A - Email Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        fieldset { width: 300px; }
        legend { font-weight: bold; font-size: 18px; }
        input[type="email"] { width: 250px; padding: 4px; margin: 8px 0; }
        input[type="submit"] { padding: 4px 12px; margin-top: 8px; }
    </style>
</head>
<body>

<h3>Task 2A - Email (Displays on Handler Page)</h3>

<form action="task2a_handler.php" method="post">
    <fieldset>
        <legend>EMAIL</legend>
        <input type="email" name="email" /><br>
        <hr>
        <input type="submit" value="Submit" />
    </fieldset>
</form>

</body>
</html>