<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Get Plant Suggestions</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Get Plant Suggestions.css">
  </head>
  <body>
<h1 id="title">Get Suggestions</h1>
<p id="description"></p>
<form id="survey-form" action="sugg_connect.php" method="POST">
  <fieldset>
    
    <label for="name">Name<input required type="text" placeholder="Name" id="name"></input></label>
    <label id="name-label"></label>
    
    <label for="email">Email<input required type="email" placeholder="Email" id="email"></input></label>
    <label id="email-label"></label>
    
    <label for="number">Average temperature in your area(in degree celcius)<input type="number" placeholder="" id="number" min="-5" max="100"></input></label>
    <label id="number-label"></label>

    <label for="name">Type of soil<input required type="text" placeholder="Name" id="type"></input></label>
    <label id="name-label"></label>
    
    <label>What kind of garden do you want?
      <select id="dropdown">
        <option disabled selected>Space available</option>
        <option>Terrace</option>
        <option>Balcony</option>
        <option>Kitchen</option>
        <option>Lawn</option>
        <option>Other</option>
          </select>
          </label>

 <label> 
   What amout of sunlight do you recieve?
  <label><input class="inline" name="1" value="low" type="radio"></input >Low</label>
  <label><input class="inline" name="1" value="moderate" type="radio">Moderate</input></label>
  <label><input class="inline" name="1"  value="high" type="radio"></input>High</label>
  </label>
  
  <label>
    Which plants do you prefer? (Check all that apply)
    <label><input class="inline" value="ANNUALS, BIENNIALS AND HERBACEOUS PERENNIALS" type="checkbox"></input>ANNUALS, BIENNIALS AND HERBACEOUS PERENNIALS</label>
  <label><input class="inline" value="SHRUBS" type="checkbox"></input>SHRUBS</label>
  <label><input class="inline" value="CLIMBERS AND CREEPERS" type="checkbox"></input>CLIMBERS AND CREEPERS</label>
  <label><input class="inline" value=" CACTI AND SUCCULENTS" type="checkbox"></input>CACTI AND SUCCULENTS</label>
  <label><input class="inline" value="INDOOR PLANTS" type="checkbox"></input>INDOOR PLANTS</label>
  <label><input class="inline" value="ORNAMENTAL PALMS AND BULBOUS PLANTS" type="checkbox"></input>ORNAMENTAL PALMS AND BULBOUS PLANTS</label>
  <label><input class="inline" value="TREES/BONSI" type="checkbox"></input>TREES/BONSI</label>
  </label>
  <label>Any comments or specifications?
    <textarea rows="3" cols="30" placeholder="Write your comment here..."></textarea>
  </label>

</fieldset>
<input type="submit" id="submit"></input>
