<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balcony</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family:'Architects Daughter';
    }
    .banner{
    width: 100%;
    height: 100vh;
    background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(background.jpeg);
    background-size: cover;
    background-position: center;
    } 
    .a{
        margin-top:20px;
        border-radius: 30px;
        text-align: center;
        margin-top:10px;
    }
    .logo{
    width: 120px;
    cursor: pointer;
    }
    .lgn{
    width: 40px;
    position:right;
    padding-left:540px;
    padding-bottom:10px;
    cursor: pointer;
    }
    .wsl{
    width: 40px;
    position:relative;
    padding-left:0px;
    padding-bottom:10px;
    cursor: pointer;
    }
    .spc{
    width: 50px;
    position:right;
    padding-left:0px;
    padding-bottom:10px;
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
        color: white;
        margin-top: auto;
        margin-bottom: -50px;
        margin-left: 140px;
    }
    .img{
    float: left;
    margin-left: 90px;
    margin-right: 70px;
    margin-bottom: 200px;
    padding-top: 30px;
  }
.arrowleft{
  position:relative;
  width: 0; 
  height: 0; 
  border-top: 15px solid transparent;
  border-bottom: 15px solid transparent;
  border-left: 20px solid white;
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
        <div class="a">
            <h2 style="color:white;font-size:30px;">TOMATO PLANTS</h2>
        </div>
        <div class="img">
            <img src="balcony/balconygarden2.jpg" height="250px" width="300px">
            <div class="arrowleft" style="left:205px; bottom: 150px; font-size: 25px; color: yellow;"> Tomato Plant</div>
            <div class="arrowleft" style="left:80px; bottom:85px; font-size: 25px; color: yellow;"> Container</div>
            <div class="arrowleft" style="left:50px; bottom:250px; font-size: 25px; color: yellow;"> Sofa</div>
        </div>

        <div>
            <p><pre style="font-size:22px;color:white;padding-left: 3%;padding-top: 30px;">
                Tomatoes on the balcony should be planted in well-drained, stable pots. Plant tomatoes in
                fertile soil to ensure favorable growth. Obtain compost or well-rotted manure, garden soil,
                and gravel or expanded clay for preparation.

                While preparing the soil, remember it should have to be well drained, permeable, slightly
                acidic and loamy. Also, mix slow release tomato fertilizer to the soil so that the plants
                will receive nutrition from time to time.

                Sow tomato seeds when the risk of frost passes and spring arrives. Seeds will germinate
                quickly within 5-10 days. Transplant them in containers when two real leaves form.

                Tomatoes on the balcony constantly need moist soil as balconies remain windier than regular
                gardens. Regular watering of tomato plants is essential, even twice on a dry, windy day
                in summer in a hot climate. Water tomatoes in a way that it’ll not soak their leaves.

                In a balcony with size 4 ft x 9 ft, to grow a tomato garden, you will need 2-3 large,
                stable containers of tomato plants, or, a few stable pots, a small sofa, seeds and a
                watering can.
         
            </pre></p>
        </div>
</body>
</html>