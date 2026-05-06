<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('location: login.php');
    exit;
}
require_once('../model/employeeModel.php');
?>
<html>
<head>
<title>Employee List</title>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<h2>Employee List</h2>

<a href="dashboard.php">Dashboard</a> |
<a href="employeeAdd.php">Add Employee</a> |
<a href="../controller/logoutController.php">Logout</a>
<hr>

<?php
if(isset($_SESSION['success'])){
    echo "<p style='color:green'>".$_SESSION['success']."</p>";
    unset($_SESSION['success']);
}
if(isset($_SESSION['error'])){
    echo "<p style='color:red'>".$_SESSION['error']."</p>";
    unset($_SESSION['error']);
}
?>

<!-- SEARCH BOX (AJAX) -->
Search: <input type="text" id="searchInput" placeholder="Type name, username or contact...">
<input type="button" id="searchBtn" value="Search">
<input type="button" id="clearBtn" value="Clear">

<br><br>

<!-- TABLE -->
<table border="1" cellpadding="6">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Username</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody id="employeeTableBody">
        <?php
        $result = getAllEmployees();
        $i = 1;
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td>$i</td>
                    <td>{$row['name']}</td>
                    <td>{$row['contact']}</td>
                    <td>{$row['username']}</td>
                    <td>
                        <a href='employeeUpdate.php?id={$row['id']}'>Edit</a> |
                        <a href='../controller/employeeDeleteController.php?id={$row['id']}'
                           onclick=\"return confirm('Delete this employee?')\">Delete</a>
                    </td>
                  </tr>";
            $i++;
        }
        ?>
    </tbody>
</table>

<!-- AJAX SEARCH SCRIPT -->
<script>
$(document).ready(function(){

    // Search button click
    $('#searchBtn').click(function(){
        doSearch($('#searchInput').val());
    });

    // Clear button click
    $('#clearBtn').click(function(){
        $('#searchInput').val('');
        doSearch('');
    });

    // Also search on typing (live search)
    $('#searchInput').keyup(function(){
        doSearch($(this).val());
    });

    function doSearch(keyword){
        $.ajax({
            url: '../controller/employeeSearchController.php',
            type: 'GET',
            data: { q: keyword },
            dataType: 'json',
            success: function(data){
                var html = '';
                if(data.length == 0){
                    html = '<tr><td colspan="5">No employee found.</td></tr>';
                } else {
                    $.each(data, function(i, emp){
                        html += '<tr>' +
                            '<td>' + (i+1) + '</td>' +
                            '<td>' + emp.name + '</td>' +
                            '<td>' + emp.contact + '</td>' +
                            '<td>' + emp.username + '</td>' +
                            '<td>' +
                                '<a href="employeeUpdate.php?id=' + emp.id + '">Edit</a> | ' +
                                '<a href="../controller/employeeDeleteController.php?id=' + emp.id + '" ' +
                                   'onclick="return confirm(\'Delete this employee?\')">Delete</a>' +
                            '</td>' +
                        '</tr>';
                    });
                }
                $('#employeeTableBody').html(html);
            }
        });
    }

});
</script>

</body>
</html>
