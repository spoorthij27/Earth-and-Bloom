<!DOCTYPE html>
<html>
<head>
  <title>Payment via UPI</title>
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

    #input{
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 16px;
      background-color:#059B14;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration:none;
    }
  </style>
</head>
<body>
  <h1>Payment via UPI</h1>
  <form onsubmit="return validateForm()">
    <p>Please complete the payment via UPI.</p>
    <br />
    <input type="hidden" name="payment" value="upi">
    <a href="upiscanner.php" id="input">Proceed to UPI Payment</a> 
  </form>
  <p>Didn't select UPI? <a href="paymentmode.php">Go back to payment selection</a></p>
</body>
</html>