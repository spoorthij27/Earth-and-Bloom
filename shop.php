<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b944b8a5c3.js" crossorigin="anonymous"></script>
    <title>Shop Now</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family:Architects Daughter;;
    }
    .info{
        width:1050px;
        height:400px;
        background:linear-gradient(rgba(241,223,189,0.753),rgba(191,156,116,0.75));
        margin-left:auto;
        margin-right: auto;
        margin-top:-150px;
        border-style: ridge;
        border-width:5px;
        padding-top:10px;
        padding-bottom:10px;
        padding-left:5%;
        padding-right:5%;


    }
    .a{
        width:180px;
        height:100px;
        background:linear-gradient(rgba(241,223,189,0.753),rgba(191,156,116,0.75));
        border:2px ridge white;
        text-align: center;
        margin-top:10px;
        margin-left: 120px;
        padding-top:15px;
        padding-bottom:15px;
        
    }
    .b{
        float:left;
        margin-top: 45px;
        margin-right: 20px;
        margin-left:20px;
        margin-bottom: 15px;
    }
    .oval {
    height: 80px;
    width: 360px;
    position:relative; 
    left:340px; top:-120px;
    font-size: 20px;
    color:white;
    text-align: center;
    padding-top: 30px;
    background:linear-gradient(rgba(241,223,189,0.753),rgba(191,156,116,0.75));
    border-radius: 50%;
    }
    .c{
        width: 580px;
        height: 100px;
        position: relative;
        left: 735px; top:-230px;
        font-size: 30px;
        background:linear-gradient(rgba(241,223,189,0.753),rgba(191,156,116,0.75));
        border:2px ridge white;
        color: white;
        text-align: center;
        padding-top: 10px;
        border-radius: 25px;
    }
    .banner{
    width: 100%;
    height: 100%;
    background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(background.jpeg);
    background-size: cover;
    background-position: center;
    } 

    .logo{
    width: 120px;
    cursor: pointer;
    }
    .navbar{
    width: 100%;
    font-size: 15px;
    font-family:'Architects Daughter';
    margin: auto;
    padding: 15px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    .navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
    }
    .navbar ul li a{
    text-decoration: none;
    color: white;
    text-decoration: uppercase;
    }

    .navbar ul li::after{
    content: '';
    height: 3px;
    width: 0%;
    background: #9AD685;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
    }

    .navbar ul li:hover::after{
    width: 100%;
    }
    .button{
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-size: 30px;
    font-family:'Architects Daughter';
    font-weight: bold;
    border: 3px solid #5A483A; 
    background: #608851 ;
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    }
    .button:hover{
    background-color: #66a84f;
    color: white;
    }

    .banner a {
    float: right;
    color: black;
    text-align: center;
    right:400px;
    margin-top: -5px;
    font-size: 17px;
    }
    .banner:hover{
    background-color: #3a871e;
    color: white;
    }
    .banner input[type=text] {
    float: right;
    padding: 6px;
    border: none;
    background-color: beige;
    margin-top: -90px;
    margin-right: 800px;
    font-size: 17px;
    }
    .logo2{
        font-size: 40px;
        font-weight: bold;
        color: white;
        margin-top: auto;
        margin-bottom: -50px;
        margin-left: 140px;
}

</style>
<body> 
    <h1>
        <div class="banner">
        <pre class="logo2">Earth & Bloom</pre>
            <div class="navbar">
            <a href="homepage.php"><img src="logo.png" class="logo"></a>
                <ul>
                    <ul style="float:right;">
                        <li><a href="signup.php"><i class="fa fa-sign-in"></i> Signup</a></li>
                        <li><a href="login.php" ><i class="fa fa-user"></i> Login</a></li>
                        <li><a href="cart.php" ><i class="fas fa-shopping-cart"></i> Cart</a></li>
                    </ul>
                     <br /><br />
                    <li><a href="garden catalogue.php">Our Services</a></li>
                    <li><a href="shop.php">Shop </a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="a">
                <h2 style="color:white;font-size:40px;">SHOP NOW</h2>
            </div>
            <div class="oval">
                <h3>Get 31% off on all items ! Sale ends on 31st December !</h3>
            </div>
            <div class="c">
                <h3>All That You Need For Your Garden To Nourish and Bloom !</h3>
            </div>
            <div class="info">
                <div class="b">
                    <button class="button"><a href="Plants.php" style="font-size:30px; color:white;  margin-right:50px;text-decoration: none;">Plants</a></button>
                </div>
                <div class="b">
                    <button class="button"><a href="Fertilizers.php" style="font-size:30px; color:white;  margin-right:30px;text-decoration: none;">Fertilizers</a></button>
                </div>
                <div class="b">
                    <button class="button"><a href="Tools.php" style="font-size:30px; color:white;  margin-right:60px;text-decoration: none;">Tools</a></button>
                </div>
                <div class="b">
                    <button class="button"><a href="Seeds.php" style="font-size:30px; color:white;  margin-right:60px;text-decoration: none;">Seeds</a></button>
                </div>
                <div class="b">
                    <button class="button"><a href="Pots.php" style="font-size:30px; color:white;  margin-right:70px;text-decoration: none;">Pots</a></button>
                </div>
                <div class="b">
                    <button class="button"><a href="Stools.php" style="font-size:30px; color:white;  margin-right:55px;text-decoration: none;">Stools</a></button>
                </div>
                <div class="b">
                    <button class="button"><a href="Pebbles.php" style="font-size:30px; color:white;  margin-right:45px;text-decoration: none;">Pebbles</a></button>
                </div>
                <div class="b">
                    <button class="button"><a href="Accessories.php" style="font-size:30px; color:white;  margin-right:22px;text-decoration: none;">Accessories</a></button>
                </div>
            </div>
            
        </div>
    </h1>
</body>
</html>