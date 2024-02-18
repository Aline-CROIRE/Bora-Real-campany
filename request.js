document.addEventListener('DOMContentLoaded', function() {
    // Get the current time
    var currentTime = new Date().getHours();
  
    // Get the greeting element
    var greetingElement = document.getElementById('greeting');
  
    // Set the greeting based on the time of day
    if (currentTime >= 5 && currentTime < 12) {
      greetingElement.textContent = 'Good morning';
    } else if (currentTime >= 12 && currentTime < 18) {
      greetingElement.textContent = 'Good afternoon';
    } else {
      greetingElement.textContent = 'Good evening';
    }
  
    // Handle form submission
    document.getElementById('serviceForm').addEventListener('submit', function(event) {
      event.preventDefault();
  
      // Get form inputs
      var name = document.getElementById('name').value;
      var contact = document.getElementById('contact').value;
      var address = document.getElementById('address').value;
      var service = document.getElementById('services').value;
      var paymentMethod = document.getElementById('paymentMethod').value;
  
      // Display payment details based on the selected payment method
      var paymentDetailsElement = document.getElementById('paymentDetails');
      if (paymentMethod === 'bank_account') {
        paymentDetailsElement.textContent = 'Please make the payment to the following bank account number: XXXXXXXXXX';
      } else if (paymentMethod === 'momo_code') {
        paymentDetailsElement.textContent = 'Please make the payment using the following MOMo code: XXXXXX';
      }
    });
  });