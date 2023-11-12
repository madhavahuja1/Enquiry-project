<!DOCTYPE html>
<html>
<head>
  <title>Fee Receipt Generator</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border: 1px solid #ddd;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .container h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .form-group input[type="text"],
    .form-group input[type="number"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    .captcha-container {
      display: flex;
      align-items: center;
    }
    .captcha-image {
      margin-right: 10px;
    }
    #receipt {
      margin-top: 20px;
      padding: 20px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
    }
    #downloadBtn {
      margin-top: 20px;
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    #downloadBtn:disabled {
      background-color: #dddddd;
      cursor: not-allowed;
    }
    .btn{
        padding: 20px 30px;
        width: 100%;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        background: #E55D87;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #5FC3E4, #E55D87);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #5FC3E4, #E55D87); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Fee Receipt Generator</h1>

    <form id="feeForm">
      <div class="form-group">
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" required>
      </div>

      <div class="form-group">
        <label for="feeAmount">Fee Amount:</label>
        <input type="number" id="feeAmount" required>
      </div>

      <div class="form-group">
        <label for="paymentMethod">Payment Method:</label>
        <select id="paymentMethod" required>
          <option value="">Select Method</option>
          <option value="credit">Credit Card</option>
          <option value="debit">Debit Card</option>
          <option value="paypal">PayPal</option>
        </select>
      </div>

      <button class="btn" type="submit">Submit</button>
    </form>

    <div id="receipt"></div>

    <button id="downloadBtn" disabled>Download Receipt</button>
  </div>

  <script>
    document.getElementById("feeForm").addEventListener("submit", function(e) {
      e.preventDefault();

      var studentName = document.getElementById("studentName").value;
      var feeAmount = document.getElementById("feeAmount").value;
      var paymentMethod = document.getElementById("paymentMethod").value;
      var captchaCode = document.getElementById("captchaCode").value;

      var receiptText = "<h2>Fee Receipt</h2>";
      receiptText += "<p><strong>Student Name:</strong> " + studentName + "</p>";
      receiptText += "<p><strong>Fee Amount:</strong> $" + feeAmount + "</p>";
      receiptText += "<p><strong>Payment Method:</strong> " + paymentMethod + "</p>";

      document.getElementById("receipt").innerHTML = receiptText;
      document.getElementById("downloadBtn").disabled = false;
    });

    document.getElementById("downloadBtn").addEventListener("click", function() {
  var receiptText = document.getElementById("receipt").innerText;
  var blob = new Blob([receiptText], { type: "text/plain" });
  var url = URL.createObjectURL(blob);
  
  var link = document.createElement("a");
  link.href = url;
  link.download = "fee_receipt.txt";
  link.click();
});

  </script>
</body>
</html>
