<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b944b8a5c3.js" crossorigin="anonymous"></script>
    <title>Container</title>
</head>
<style>
 *{
    margin: 0;
    padding: 0;
    font-family: 'Architects Daughter';
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
.logo2{
        font-size: 40px;
        font-weight: bold;
        color: white;
        margin-top: auto;
        margin-bottom: -50px;
        margin-left: 140px;
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
    color:#059B14 ;
  }
  .suitable_plants{
    float:right;
    margin-top:30px;
    margin-bottom:30px;
    margin-right: 100px;
    
    color:#059B14 ;
  }
  .images{
    margin-top:18%;
    
  }
  .img{
    float: left;
    border: 4px #059B14;
    border-style:solid;
    margin-left: 90px;
    margin-right: 90px;
    margin-bottom: 40px;
  }
  .c
    {
      background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)), url(background.jpeg);
    width: 100%;
    height:100%;
    background-size: cover;
    background-position: center;
  }
  .c input[type=text] {
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
  <div class="c">
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
    <div class="centered">Container Garden</div>
   </div> 
   <div class="info">
    <p style="color:#059B14;font-size:30px;">What exactly is a container garden!</p>
    <p><pre style="color:white">          Container gardening or pot gardening/farming is the practice of growing plants, including edible plants, exclusively in 
      containers instead of planting them in the ground.A container in gardening is a small, enclosed and usually portable object used for
      displaying live flowers or plants. It may take the form of a pot, box, tub, basket, tin, barrel or hanging basket.</pre></p>
   </div>
   <div class="requirements">
    <h2>REQUIREMENTS:</h2>
    <p><pre style="color:white;font-size:20px;">
  1.Sunlight
  2.Water facility
  3.Air flow
 
     </pre></p>
     
   </div>
   <div class="suitable_plants">
    <h2>SUITABLE PLANTS</h2>
    <p><pre style="color:white;font-size:20px;">   1.Pretty Pistachio
   2.Blackberry
   3.viola
   4.Peppers
   5.Marigold,Hibiscus
   6.Alovera
   7.Canna Lily
  </pre></p>
  </div>
  <div class="images">
    <div class="img">
      <img src="container/container1.jpg" height="250px" width="300px">
    </div>
    <div class="img">
      <img src="container/container2.jpg" height="250px" width="300px">
    </div>
    
    <div class="img">
      <img src="container/container3.jpg" height="250px" width="300px">
    </div>
    <div class="img">
      <img src="container/container4.jpg" height="250px" width="300px">
    </div>
    <div class="img">
      <img src="container/container5.jpg" height="250px" width="300px">
    </div>
    <div class="img">
      <img src="container/container6.jpg" height="250px" width="300px">
    </div>
  </div>
  <div>
    <div>
        <h1 style="color:#059B14;padding-left: 3%;padding-top: 1%;">Know more about Container Garden</h1>
        <p>
            <pre style="font-size:18px;color:white;padding-left: 3%;padding-top: 1%;">
 Containers are an easy way to add a splash of color to your garden, patio, or porch. Sure, you can just throw some begonias or petunias into a pot and call it a day. But with a little extra
 effort, you can plant a truly stunning container garden full of thriving flowers and foliage. The right mix of plants arranged correctly in a pretty planter can be pure magic. These six simple
 steps will show you how to create a beautiful arrangement every time. Then all you'll need to do is keep things watered and enjoy the colorful display all season long.

 1. Choose the Right Container

 Much like plants, containers have their own characteristics to take into account, including weight, sensitivity to weather changes, and appearance. You'll also want to consider your budget,
 space, and style when choosing a container. Keep in mind that the larger the size, the less you'll need to water, but whatever you choose, always make sure the container has holes in the
 bottom for drainage.

 2. Select Color Schemes and Plant Combinations

 Having a color theme for your container garden can help you select a good mix of plants. You can play off the color of your container, or focus on the flowers and foliage you plan to
 include. When combining plants in your containers, make sure they' all need the same light levels and frequency of watering. Plant them in odd numbers and be sure to have at least
 one thriller, filler, and spiller plant. Combining these three types of plants adds interest and balance.

 3. Limit the Number of Plants You Use

 Be careful not to overfill a container garden. If the plants are overcrowded, growth can be stunted both above and below the soil.
 
 4. Fill the Container with Potting Mix

 Once you've selected your plants and a container, it's time to get planting. Fill your container two-thirds full with an all-purpose potting mix. Don't be tempted to use garden soil. It's too
 heavy and won't drain as well as it must in a container. If you have a really large planter and would like to use less potting mix, turn smaller empty containers upside down and place them on
 the bottom to take up some of the space. Then fill around them with potting mix until your container is two-thirds full.

 5. Place Plants in Your Container

 When you're ready to add plants, give their nursery containers a gentle squeeze around the sides to loosen the root ball enough until you can slide it out. Avoid tugging on the plant itself,
 which may damage it. Then, set your plants on the potting mix so that the top of their root balls are a couple of inches below the rim of your container. This will make it easier for you to
 water later. Fill in around your plants with more potting mix, making sure the stems are no deeper in soil than they were in their nursery containers. Use your hands to press down lightly
 on the mix to eliminate large air pockets.

 6. Water in Your Plants

 Water your container garden to help the soil settle in. Add more soil if needed so that all the roots are covered. Remember to keep the soil level a couple of inches below the rim of the
 container to prevent water and soil from spilling out.After that first watering, check back in a day or two to see if the first inch or so of soil is dry to the touch. If it's dry, it's time
 to water again. You'll know you've given your container enough water when some runs out of the drainage hole (s). If you choose to use a saucer under the pot, make sure to keep it emptied
 since plant roots can rot when left sitting in the collected water.

            </pre>
        </p>
    </div>
  </div>  
</body>
</html>