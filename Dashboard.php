<!DOCTYPE html>
<html>
    <head>
    <titel> Admin Dashboard</titel>
    <style>
        table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}
</style>
</head>
<body>
<?php
    // Include your database connection file
    include('connection.php');

    // Fetch data from the "users" table
    $query = "SELECT * FROM client";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<table>';
        echo '<tr><th>Names</th><th>Email</th><th>Address</th><th>Service</th><th>Method</th></tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Names'] . '</td>';
            echo '<td>' . $row['Email'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['Service'] . '</td>';
            echo '<td>' . $row['Method'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'Error fetching data: ' . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
</body>
</html>