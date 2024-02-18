<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <style>
        body {
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
        }

        .header {
            background-color: #333
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        h2 {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-size: 32px;
            color: yellow; /* Set the color directly in the CSS */
        }

        .adm-buttons {
            display: flex;
            gap: 10px;
            margin-right: auto;
        }

        .adm,
        .adm-tool,
        .adm-delete,
        .adm-clients,
        .adm-publish,<style>
    body {
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
    }

    .header {
        background-color: #333;
        color: white;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1000;
    }

    h2 {
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 32px;
        color: yellow;
    }

    .adm-buttons {
        display: flex;
        gap: 10px;
        margin-right: auto;
    }

    .adm,
    .adm-tool,
    .adm-delete,
    .adm-clients,
    .adm-publish,
    .adm-update,
    .adm-logout {
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        border: none;
        font-size: 16px; /* Adjusted font size */
        padding: 8px 15px; /* Adjusted padding */
        border-radius: 3px;
        cursor: pointer;
        background-color: #3067c6;
        color: white;
    }

    .adm-logout {
        background-color: rgb(43, 5, 72);
    }

    .adm:hover,
    .adm-tool:hover,
    .adm-delete:hover,
    .adm-clients:hover,
    .adm-publish:hover,
    .adm-update:hover,
    .adm-logout:hover {
        background-color: rgb(139, 169, 30);
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        margin: 20px;
    }

    .table {
        border-collapse: collapse;
        margin-top: 20px;
        width: 100%;
    }

    .table th,
    .table td {
        border: 1px solid gray;
        padding: 12px; /* Adjusted padding for better spacing */
        text-align: left;
    }

    .table tbody tr:nth-child(even) {
        background-color: lightgrey;
    }

    /* Added styles for alternating row colors */
    .table tbody tr:nth-child(odd) {
        background-color: #f2f2f2;
    }
</style>

    <script>
        function Modified() {
            alert("No data yet inserted");
        }

        function Message() {
            window.location.href = 'Messages.php';
        }

        function ViewClients() {
            event.preventDefault();
            window.location.href = 'clients.php';
        }

        function Publish() {
            alert("Published");
        }

        function Update() {
            alert("Updated");
        }

        function Logout() {
            window.location.href = 'WEBDESIGN.php';
        }

        function toggleView() {
            var viewPage = document.getElementById("viewPage");

            if (viewPage.style.display === "none") {
                viewPage.style.display = "block";
            } else {
                viewPage.style.display = "none";
            }
        }
    </script>
</head>

<body>
    <div class="header">
        <h2>Admin</h2>
        <div class="adm-buttons">
            <button class="adm-tool">Modification</button>
            <button onclick="Message()" class="adm-delete">Message</button>
            <a href="clients.php"><button class="adm-clients" onclick="ViewClients()">Clients</button></a>
            <button onclick="Publish()" class="adm-publish">Publish</button>
            <button onclick="Update()" class="adm-update">Update</button>
            <button onclick="Logout()" class="adm-logout">Logout</button>
        </div>
    </div>

    <div class="container">
    <?php
include("Connection.php");
$q = "SELECT * FROM client";
$results = mysqli_query($conn, $q);
echo "<table class=\"table\">
    <tr bgcolor='#C9C0BB'>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Service</th>
        <th>Method</th>
        <th>Status</th>
        <th colspan=3>Action</th>
    </tr>";

while ($r = mysqli_fetch_array($results)) {
    echo "<tr>
            <td>" . $r['id'] . "</td>
            <td>" . $r['Names'] . "</td>
            <td>" . $r['Email'] . "</td>
            <td>" . $r['address'] . "</td>
            <td>" . $r['Service'] . "</td>
            <td>" . $r['Method'] . "</td>
            <td>" . $r['STATUS'] . "</td>
            <td><a href='view.php?userid=" . $r['id'] . "' onclick='toggleView()'><button>View</button></a></td>
            <td><button>Edit</button></td>
            <td><a href='approval.php?userid=" . $r['id'] . "' onclick='toggleView()'><button>Approval</button></a></td>
        </tr>";
}

echo "</table>";
?>

    </div>
</body>

</html>