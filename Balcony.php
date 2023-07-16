<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b944b8a5c3.js" crossorigin="anonymous"></script>
    <title>Balcony</title>
</head>
<style>
 *{
    margin: 0;
    padding: 0;
    font-family: 'Architects Daughter';
}
.banner{
    width: 100%;
    height: 100%;
    background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(background.jpeg);
    background-size: cover;
    background-position: center;
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

.logo{
    margin-top: auto;
width: 120px;
cursor: pointer;
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
 
.container {
 
  text-align: center;
  color:#059B14;
  font-size: 100px;
  }

  .info{
    text-align:center;
    font-size: 20px;
  }
  .requirements{
    float: left;
    margin-top:30px;
    margin-bottom:50px;
    margin-left: 100px;
    margin-right:20%;
    color:#059B14;
  }
  .suitable_plants{
    float:right;
    margin-top:30px;
    margin-bottom:30px;
    margin-right: 100px;
    
    color:#059B14 ;
  }
  .images{
    margin-top:20%;
    
  }
  .img{
    float: left;
    border: 4px #059B14;
    border-style:solid;
    margin-left: 90px;
    margin-right: 70px;
    margin-bottom: 40px;
  }   
  .logo2{
        font-size: 40px;
        color: white;
        margin-top: auto;
        margin-bottom: -50px;
        margin-left: 140px;
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
   <div class="container">
    <div>Balcony Garden</div>
   </div> 
   <div class="info">
    <p><pre style="color:white;">If you are looking to transform your balcony into a beatuiful piece of garden,then you are at the right place.</pre></p>
    <p style="color:#059B14;font-size:30px;">What exactly is a balcony garden!</p>
    <p><pre style="color:white;">A Balcony garden is a garden created,typically in an urban apartment with limited space.<br>A balcony garden is created with the choice of your plants,the way you want it to look like.</pre></p>
    <p><pre style="color:white;">A balcony garden not only makes the balcony look beautiful but acts as therapy,has the advantage of growing veggies,
       flowers and also acts as a barrier to noise.</pre></p>
   </div>
   <div class="requirements">
    <h2>REQUIREMENTS</h2>
    <p><pre style="color:white;font-size:20px;">  1.Available space
  2.Sunlight
  3.Water facility
  4.Air flow
  5.Drainage facility
     </pre></p>
     
   </div>
   <div class="suitable_plants">
    <h2>SUITABLE PLANTS</h2>
    <p><pre style="color:white;font-size:20px;">   1.Herbs
   2.Leafy greens
   3.Tomato,Egg plant,Cucumber,Garlic
   4.Strawberry
   5.Rose,Marigold,Hibiscus,Pancy
   6.Alovera,Money plant
   7.Peppers
  </pre></p>
  </div>
  <div class="images">
    <div class="img">
      <a href="balcony1.php"><img src="balcony/balconygarden1.jpg" height="250px" width="300px"></a>
    </div>
    <div class="img">
      <a href="balcony2.php"><img src="balcony/balconygarden2.jpg" height="250px" width="300px"></a>
    </div>
    <div class="img">
      <a href="balcony3.php"><img src="balcony/balconygarden3.jpg" height="250px" width="300px"></a>
    </div>
    <div class="img">
      <a href="balcony4.php"><img src="balcony/balconygarden4.webp" height="250px" width="300px"></a>
    </div>
    <div class="img">
      <a href="balcony5.php"><img src="balcony/balconygarden5.jpg" height="250px" width="300px"></a>
    </div>
    <div class="img">
      <a href="balcony6.php"><img src="balcony/balconygarden6.jpg" height="250px" width="300px"></a>
    </div>
    <div class="img">
      <a href="balcony7.php"><img src="balcony/balconygarden7.jpg" height="250px" width="300px"></a>
    </div>
    <div class="img">
      <a href="balcony8.php"></a><img src="balcony/balconygarden8.jpeg" height="250px" width="300px"></a>
    </div>
  </div>
  <div>
    <div>
    <h1 style="color:#059B14;margin-top:1200px;padding-left: 3%;padding-top: 1%;">Know more about Balcony garden</h1>
      <p><pre style="font-size:18px;color:white;padding-left: 3%;padding-top: 1%;">

 Your first major consideration when growing on a balcony is whether the balcony itself can support what you’re growing. Most balconies should be able to handle a few containers or beds,
 but it’s a good idea to test the sturdiness of your space before you start loading it up with plants.

 You’d be surprised at how heavy a container can get once it’s full of soil, water, and a loaded tomato plant, especially if you have a bunch of them. Spread your pots around your balcony
 instead of clumping them in one area. Doing this will spread out the weight distribution and you won’t have any nasty balcony gardening mishaps.

 Every balcony is unique, so the urban gardening masterpiece you decide to create should be tailored to your situation. That being said, there are some basic rules of thumb to follow to
 create a balcony garden that’s beautiful, functional, and, best of all—productive. Balconies have three distinct sections to consider, which are the floor, the railing, and everything
 else. Thinking in these three layers will help you make the absolute best use of the limited space you have.
 
 If you’re willing to sacrifice some foot room, the floor of your balcony is a great spot for larger containers full of plants that need a bit of space to grow. Tomatoes, peppers,
 eggplants, and beans are all great plants to grow in containers on your balcony floor. Over time, they’ll fill out the space well.

 Your railings are the best location in your balcony garden. They’re exposed to the most sun and don’t take up extra space as they hang off the balcony. For all their value, there is no
 more confusing piece of gardening gear than balcony railing planters. Because there are so many different types of railings, it’s often confusing exactly how to attach planters to
 railings. Given the amount of wind that balconies are subject to, the last thing you want to do is shoddily attach a railing planter only to see it tumbling down to the ground below.

 It’s easier to get your garden off to a good start if you buy seedlings from a local nursery and simply transplant them into your balcony garden. Starting seeds is certainly a fun option to
 try if you want to flex your gardening muscles. But if you’re a first-time gardener looking to get growing fast, buy seedlings from a local nursery.

 One step above choosing larger containers is choosing larger containers that are self-watering. These containers wick water from a chamber at the bottom of the pot to give your plants'
 roots a consistent supply. You can find large self-watering containers at most nurseries or big-box stores, or you can build your own. The extra cost is well worth the time you’ll save
 watering your plants.

</pre></p>
  
    </div>
   
   
  </div>
</div>
  
</body>
</html>