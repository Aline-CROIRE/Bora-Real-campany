function displayPaymentDetails() {
    const paymentMethodSelect = document.getElementById("paymentMethod");
    const selectedMethod = paymentMethodSelect.value;
    const paymentDetailsDiv = document.getElementById("paymentDetails");
  
    
    const paymentMethods = {
     select: "Select payment Method: null",
      bank: "Bank Account: 004567",
      momo: "Momo Pay Code: 7890",
    };
  
   
    paymentDetailsDiv.innerHTML = "";
  
   
    if (paymentMethods.hasOwnProperty(selectedMethod)) {
      const paymentDetails = paymentMethods[selectedMethod];
      paymentDetailsDiv.textContent = paymentDetails;
    } else {
      paymentDetailsDiv.textContent = "Invalid payment method selected.";
    }
  }