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
  .arrowright{
  position:relative;
  width: 0; 
  height: 0; 
  border-top: 15px solid transparent;
  border-bottom: 15px solid transparent;
  border-right: 20px solid white;
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
            <a href="homepage.html"><img src="logo.png" class="logo"></a>
            <img src="sgn.png" class="lgn">
            <a href="signup.html" style="color:white; font-size: 15px;">Signup</a>
            <img src="lgn1.png" class="wsl">
            <a href="login.html" style="color:white; font-size: 15px;">Login</a>
            <img src="spc.png" class="spc">
            <a href="cart.html" style="color:white; font-size: 15px;">Cart</a>
            <ul>
                <li><a href="garden catalogue.html">Our Services</a></li>
                <li><a href="shop.html">Shop </a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
        <input type="text" placeholder="Search..">
        <div class="a">
            <h2 style="color:white;font-size:30px;">STRAWBERRY PLANTS</h2>
        </div>
        <div class="img">
            <img src="balcony/balconygarden6.jpg" height="250px" width="300px">
            <div class="arrowright" style="left:180px; bottom: 120px; font-size: 25px; color: yellow;">Strawberry Plant</div>
            <div class="arrowleft" style="left:30px; bottom:110px; font-size: 25px; color: yellow;">Pot</div>
            <div class="arrowleft" style="left:135px; bottom:105px; font-size: 25px; color: yellow;">Table</div>
        </div>

        <div>
            <p><pre style="font-size:22px;color:white;padding-left: 3%;padding-top: 30px;">
                Strawberries are a popular summer fruit perfectly suited to growing on a balcony. They work well
                in compact spaces, produce plenty of fruit, and require very little maintenance.

                To grow strawberries, you’ll need: 5” or larger plant pot, potting soil, trowel, and watering can.
                Strawberry plants need mulching to stop the fruit from rotting. You can use straw or polythene
                sheeting. Place some around the base of the plant, although this isn’t as important when growing
                in hanging pots. For fertilizing, use one low in nitrogen. Nitrogen produces more leaves and
                diverts energy away from fruiting. You can switch back to an all-purpose fertilizer in the
                fall, though.

                In a balcony with size 4 ft x 9 ft, to grow a strawberry garden, you will need 2-3 strawberry plants,
                along with a few pots, a small table, seeds and a watering can.
         
            </pre></p>
        </div>
</body>
</html>