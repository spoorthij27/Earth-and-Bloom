<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b944b8a5c3.js" crossorigin="anonymous"></script>
    <title>Our Services</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: 'Architects Daughter';
    }
    .info{
        width:60%;
        height:430px;
        background:linear-gradient(rgba(241, 223, 189, 0.753),rgba(191, 157, 116, 0.75));
        margin-left:auto;
        margin-right: auto;
        margin-top:20px;

        border:5px solid white;
        border-radius: 30px;
        padding-top:3%;
        padding-bottom:3%;
        padding-left:5%;
        padding-right:5%;


    }
    
    .logo{
        margin-top: auto;
        width: 120px;
        cursor: pointer;
    }
    .a{

        
        margin-top:40px;
        border-radius: 30px;
        
    }
    .b{
        float:left;
        margin-right: 25px;
        margin-left:50px;
        margin-bottom: 40px;
        text-align:center;
    }
    .b a{
        text-decoration:none;
        color:black;
    }
    .banner{
    width: 100%;
    height: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(background.jpeg);
    background-size: cover;
    background-position: center;
    }
    

    .navbar{
width: 100%;
font-size: 17px;
font-weight: bold;
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
.logo2{
        font-size: 40px;
        font-weight: bold;
        color: white;
        margin-top: auto;
        margin-bottom: -50px;
        margin-left: 140px;
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
</style>
<body>
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
    <center>
        <div class="a">
            <h2 style="color:white;font-size:20px;">OUR SERVICES</h2>
        </div>
    </center>
    
    <div class="info">
        <div class="b">
            <img src="balcony/balcony.jpg" width="200px" height="180px" >
            <div class="text">
                <a href="Balcony.php">Balcony</a>
            </div>
        </div>
        <div class="b">
           <img src="terrace/terrace.webp"  width="200px" height="180px">
           <div class="text">
            <a href="Terrace.php">Terrace</a>
        </div>
        </div>
        <div class="b">
            <img src="kitchen/kitchen.jpg"  width="200px" height="180px">
            <div class="text">
               <a href="Kitchen.php"> Kitchen</a>
            </div>
        </div>
        
        <div class="b">
            <img src="lawn/lawn.jpg"  width="200px" height="180px">
            <div class="text">
               <a href="Lawn.php"> Lawn</a>
            </div>
        </div>
        <div class="b">
            <img src="backyard/back yard.webp"  width="200px" height="180px">
            <div class="text">
               <a href="Backyard garden.php"> Backyard</a>
            </div>
        </div>
        <div class="b">
            <img src="container/ccontainer.jpg"  width="200px" height="180px">
            <div class="text">
               <a href="container.php"> Container</a>
            </div>
        </div>
      
    </div>
   </div>
    
    
</body>
</html>