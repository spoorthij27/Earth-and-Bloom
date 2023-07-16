<!DOCTYPE html>
<html>
<head>
  <title>UPI Payment with QR Scanner</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding-top: 50px;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(background.jpeg);
    background-size: cover;
    background-position: center;
    }

    h1 {
      color: white;
    }

    p {
      font-size: 18px;
      margin-bottom: 10px;
      color: white;
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
      var upiIdPattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+$/;

      if (upiId.trim() === '') {
        var errorMessage = document.getElementById('error-message');
        errorMessage.textContent = 'Please enter a UPI ID.';
        return false;
      }

      if (!upiIdPattern.test(upiId)) {
        var errorMessage = document.getElementById('error-message');
        errorMessage.textContent = 'Please enter a valid UPI ID.';
        return false;
      }

      return true;
    }
  </script>
</head>
<body>
  <h1>UPI Payment</h1>
  <form onsubmit="return validateForm()">
    <p>Scan the QR code or enter the UPI ID to proceed with the payment:</p>
    <input type="text" id="upi-id" placeholder="Enter UPI ID"><br />
    <br />
    <input type="submit" value="Proceed to Payment">
    <a href="paymentsuccess.php"></a>
    <p id="error-message" style="color: red;"></p>
    <img src= "QRCode.png" width="300px" height="300px">
  </form>
</body>
</html>