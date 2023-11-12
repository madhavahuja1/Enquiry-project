<!DOCTYPE html>
<html>
<head>
  <title>Fee Receipt Generator</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border: 1px solid #dddddd;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      font-weight: bold;
    }
    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #dddddd;
      border-radius: 4px;
    }
    button[type="submit"] {
      padding: 10px 20px;
      background-color: #4caf50;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Pay your fees now</h1>
    <form id="feeForm">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" required>
      </div>
      <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="text" id="amount" required>
      </div>
      <div class="form-group">
        <label for="paymentMethod">Payment Method:</label>
        <select id="paymentMethod" required>
          <option value="">Select payment method</option>
          <option value="creditCard">Credit Card</option>
          <option value="debitCard">Debit Card</option>
          <option value="netBanking">Net Banking</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit">Generate Receipt</button>
      </div>
    </form>
  </div>

  <script>
    document.getElementById("feeForm").addEventListener("submit", function(e) {
      e.preventDefault();

      // Get form values
      var name = document.getElementById("name").value;
      var amount = document.getElementById("amount").value;
      var paymentMethod = document.getElementById("paymentMethod").value;

      // Generate receipt content
      var receiptContent = "Name: " + name + "\n";
      receiptContent += "Amount: " + amount + "\n";
      receiptContent += "Payment Method: " + paymentMethod;

      // Create a text file blob for the receipt content
      var blob = new Blob([receiptContent], { type: "text/plain" });

      // Create a download link for the receipt
      var link = document.createElement("a");
      link.href = URL.createObjectURL(blob);
      link.download = "fee_receipt.txt";

      // Programmatically trigger the download
      link.click();
    });
  </script>
</body>
</html>
