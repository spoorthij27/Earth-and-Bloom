<!DOCTYPE html>
<html>
<head>
  <title>UPI Payment with QR Scanner</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      text-align: center;
      padding-top: 50px;
    }

    h1 {
      color: #333333;
    }

    p {
      font-size: 18px;
      margin-bottom: 10px;
    }

    input[type="text"] {
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
  <script>
    function validateForm() {
      var upiId = document.getElementById('upi-id').value;

      if (upiId.trim() === '') {
        var errorMessage = document.getElementById('error-message');
        errorMessage.textContent = 'Please enter a valid UPI ID.';
        return false;
      }

      // Additional validation logic can be added if needed

      return true;
    }
  </script>
</head>
<body>
  <h1>UPI Payment</h1>
  <form onsubmit="return validateForm()">
    <p>Scan the QR code or enter the UPI ID to proceed with the payment:</p>
    <input type="text" id="upi-id" placeholder="Enter UPI ID"><br><br>
    <input type="submit" value="Proceed to Payment">
    <p id="error-message" style="color: red;"></p>
  </form>
</body>
</html>