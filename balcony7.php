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
    background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(background.jpg);
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
            <h2 style="color:white;font-size:30px;">BASIL PLANTS</h2>
        </div>
        <div class="img">
            <img src="balcony/balconygarden7.jpg" height="250px" width="300px">
            <div class="arrowright" style="left:230px; bottom: 110px; font-size: 25px; color: yellow;">Basil Plant</div>
            <div class="arrowleft" style="left:68px; bottom:130px; font-size: 25px; color: yellow;">Pot</div>
            <div class="arrowleft" style="left:30px; bottom:120px; font-size: 25px; color: yellow;">Table</div>
        </div>

        <div>
            <p><pre style="font-size:22px;color:white;padding-left: 3%;padding-top: 30px;">
                Basil plant is perfectly suited to indoor growing, or on a balcony, in pots or garden boxes. Take
                care to water regularly so that the soil mix never dries up.
                
                Sow seeds directly in the final pot, prepare your soil mix to prevent damping off, sprinkle seeds
                around the pot and cover them with a thin layer of soil mix. Put your seeds in a well-lit place,
                but avoid direct sunlight, especially during the hottest moments of the day. Water regularly with
                a fine drizzle to sustain moisture in the soil mix.

                For growing a basil plant, choose a sunny spot. This herb prefers full sunlight but easily tolerates
                partial shade as well. Growing basil in containers is super easy. You can keep this herb in a
                small-sized container. To grow, choose a 6-8 inches pot with sufficient drainage holes.

                In a balcony with size 4 ft x 9 ft, to grow a basil plant garden, you will need 2-3 basil plants,
                along with a few pots, a small table, seeds and a watering can.
         
            </pre></p>
        </div>
</body>
</html>