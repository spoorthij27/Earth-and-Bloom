<!DOCTYPE html>
<html lang="en">
<style>
    body {
          background-image: url('flower.jpg');
        }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="./payment.css">

</head>
<body>

<div class="container">

    <form action="bill_connect.php" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="fullname" placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="house/flat number - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text"name="city" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>country :</span>
                        <input type="text" name="country" placeholder="india">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zipcode" placeholder="123 456">
                    </div>
                </div>

            </div>
        <input type="submit" name="submit" value="Submit" class="submit-btn">

    </form>

</div>    
    
</body>
</html>