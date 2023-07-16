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
            <h2 style="color:white;font-size:30px;">ALOE VERA PLANTS</h2>
        </div>
        <div class="img">
            <img src="balcony/balconygarden4.webp" height="250px" width="300px">
            <div class="arrowright" style="left:50px; bottom: 240px; font-size: 25px; color: yellow;"> Watering Can</div>
            <div class="arrowright" style="left:240px; bottom:90px; font-size: 25px; color: yellow;"> Pot</div>
            <div class="arrowright" style="left:160px; bottom:180px; font-size: 25px; color: yellow;">Aloe Plant</div>
            <div class="arrowleft" style="left:10px; bottom:135px; font-size: 25px; color: yellow;"> Table</div>
        </div>

        <div>
            <p><pre style="font-size:22px;color:white;padding-left: 3%;padding-top: 30px;">
                Aloe vera plants are usually sold very small, but it is surprising how large they can get– up
                to 2 feet tall and 2.5 feet wide. There are many varieties of aloe vera that thrive in
                containers– some completely green and others having white speckles. When planting aloe vera
                in your balcony garden, remember that it doesn't like its leaves touching the potting soil.
                If the leaves touch soil, the leaves will turn dark green and begin to rot.

                The best soil to use for the aloe vera plant is well-draining. It is best to use a cactus or
                succulent mix, which you can find at your local garden shop. Be aware that yellowing or rotting
                leaves, or a dying aloe vera can be the result of overwatering. 

                To stay healthy, aloe plants need bright, indirect sunlight. Often, you can set the plant in
                your kitchen window, and it will get plenty of sunshine. If you're growing aloe vera outdoors,
                it should go in a sunny spot.

                In a balcony with size 4 ft x 9 ft, to grow an aloe vera garden, you will need 5-6 aloe vera plants,
                along with a few pots, a small table, seeds and a watering can.
         
            </pre></p>
        </div>
</body>
</html>