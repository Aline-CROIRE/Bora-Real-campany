<!DOCTYPE html>
<html
    <head>
             <titel></titel>
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
</body>
<?php
// Assuming you have a database connection established
include('connection.php'); // Include your database connection file or establish the connection here

// Check if form is submitted for update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['Names'];
    $email = $_POST['Email'];
    $address = $_POST['address'];
    $services = $_POST['service'];
    $method = $_POST['Method'];

    // Update query
    $updateQuery = "UPDATE Client SET Names='$name', Email='$email', Address='$address', Services='$services', Method='$method' WHERE id='$id'";
    mysqli_query($conn, $updateQuery);
    header("Location: your_page.php"); // Redirect to the page where the table is displayed after updating
    exit();
}

// Check if form is submitted for delete
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Delete query
    $deleteQuery = "DELETE FROM Client WHERE id='$id'";
    mysqli_query($conn, $deleteQuery);
    header("Location: your_page.php"); // Redirect to the page where the table is displayed after deleting
    exit();
}

// Check if form is submitted for approve
if (isset($_POST['approve'])) {
    $id = $_POST['id'];

    
    $approveQuery = "UPDATE Client SET STATUS='Approved' WHERE id='$id'";
    mysqli_query($conn, $approveQuery);
    header("Location: your_page.php"); 
}



$query = "SELECT * FROM Client";
$result = mysqli_query($conn, $query);


if ($result && mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Address</th>';
    echo '<th>Services</th>';
    echo '<th>Method</th>';
    echo '<th>Status</th>';
    echo '<th>Actions</th>';
    echo '</tr>';
    

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['Names'];
        $email = $row['Email'];
        $address = $row['address'];
        $services = $row['Service'];
        $method = $row['Method'];
        $status = $row['STATUS'];
        
        echo '<tr>';
        echo "<td>$name</td>";
        echo "<td>$email</td>";
        echo "<td>$address</td>";
        echo "<td>$services</td>";
        echo "<td>$method</td>";
        echo "<td>$status</td>";
        echo '<td>';
        echo '<form method="POST" action="">';
        echo "<input type='hidden' name='id' value='$id'>";
        echo "<input type='hidden' name='name' value='$name'>";
        echo "<input type='hidden' name='email' value='$email'>";
        echo "<input type='hidden' name='address' value='$address'>";
        echo "<input type='hidden' name='services' value='$services'>";
        echo "<input type='hidden' name='method' value='$method'>";
        echo '<input type="submit" name="update" value="Update">';
        echo '<input type="submit" name="delete" value="Delete">';
        if ($status != 'Approved') {
            echo '<input type="submit" name="approve" value="Approve">';
        }
        echo '</form>';
        echo '</td>';
        echo '</tr>';
    }
    
    echo '</table>';
} else {
    echo "No data found.";
}


mysqli_close($conn);
?>
</body>
</html>