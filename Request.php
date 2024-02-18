<!DOCTYPE html>
<html>
<head>
  <title>User Service Request</title>
  <link rel="stylesheet" type="text/css" href="request.css">
</head>
<body>
  <div class="container">
    <h1>Welcome, <span id="greeting"></span>!</h1>
    <form id="serviceForm" action="insert.php" method="POST">
      <label for="names">Your Name:</label>
      <input type="text" id="name" name="Names" required>

      <label for="contact">Phone Number or Email:</label>
      <input type="text" id="contact" name="Email" required>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>

      <label for="services">Select a Service:</label>
      <select id="services" name="Service">
        <option value="Select a service">Select a Service</option>
        <option value="property_valuation">Property Valuation</option>
        <option value="real_estate_consultancy">Real Estate Consultancy</option>
        <option value="land_surveying">Land Surveying</option>
        <option value="project_property_right">Project and Property Right</option>
        <option value="property_agency_management">Property Agency and Management</option>
        <option value="business_plan">Business Plan</option>
      </select>

      <label for="paymentMethod">Select a Payment Method:</label>
      <select id="paymentMethod" name="Method" onchange="displayPaymentDetails()">
        <option value="Select a payment medthod">Select a Payment Method</option>
        <option value="bank_account" name="bank">Bank Account</option>
        <option value="momo_code" name="momo">MOMO Code</option>
      </select>

      <div id="bankAccountDetails">
        <p>Bank Account: BK 1122345 </p>
      </div>

      <div id="momoCodeDetails">
        <p>MOMO Code: 4567</p>
      </div>

      <input type="submit" value="Submit">
    </form>

    <script>
      function displayPaymentDetails() {
        var paymentMethod = document.getElementById("paymentMethod").value;
        var bankAccountDetails = document.getElementById("bankAccountDetails");
        var momoCodeDetails = document.getElementById("momoCodeDetails");

        if (paymentMethod === "bank_account") {
          bankAccountDetails.style.display = "block";
          momoCodeDetails.style.display = "none";
        } else if (paymentMethod === "momo_code") {
          bankAccountDetails.style.display = "none";
          momoCodeDetails.style.display = "block";
        } else {
          bankAccountDetails.style.display = "none";
          momoCodeDetails.style.display = "none";
        }
      }
      </div>
    </script>
      <?php

include('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name = $_POST['Names'];
$contact = $_POST['Email'];
$address = $_POST['address'];
$service = $_POST['Service'];
$paymentMethod = $_POST['Method'];


$query = "INSERT INTO client(Names, Email, address, Service, Method) VALUES ('$name', '$contact', '$address', '$service', '$paymentMethod')";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "Form data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
</body>
</html>