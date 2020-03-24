<!DOCTYPE html>
<html>
<!--This are the standard elements you need to have in your head-->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="GameWorld">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>GameWorld</title>
</head>
<body>
<!--This is the main division-->
<div id="Main-div">
<!--This is the header with the logo inside of it-->
    <header id="header">
    <a href="index.php" class="Logo">GamePlanet.</a>
    </header>
<!--This is the top division with the navigation inside-->
        <div class="top-div">
            <!--This is the header-->
                <?php include("inc/Header.html");?>
        </div>
<!--This is the about division-->
    <div class="About">
<!--This is the About GamePlanet header-->
        <h1>About GamePlanet.</h1>
<!--This is the first text division-->
    <div class="Text">
        <p>GamePlanet is a gaming webstore founded in the fall of 2019 our slogan is The planet of games.<br> 
           We see ourselfs as the cheapest and best gaming webshop.<br>
           We sell almost every game for almost every console and for the cheapest price you can find on the internet!<br>
           If you find a game for cheaper in a different webshop or store we will change our price and give you the game for free.<br>
           We always try to improve our webshop to have the best and easiest working webshop for games.<br>
           We always accept critisism from the users to help us give them the best experience you can have.<br>
        </p>
    </div>
<!--This is the What can you do for us? header-->
        <h1>What can you do for us?</h1>
<!--This is the second text division-->
    <div class="Text">
        <p>We also can use some usefull help from you guys like we already mentioned in the first bit of text.<br>
           We have a contact tab in the header as you probably already have seen when you go to that page you can see all the ways of contacting us.<br>
           We like you to do so if you have some good tips also if you think you can improve our website give us a call and we will discuss opurtunities.<br>
           So don't wait and start helping us to make it easier for you to use our webshop.<br>
        <br>
           Your friends from GamePlanet!
        </p>
<!--This is the planet picture-->
            <div class="image">
                <img src="images/planet.png" alt="planet" class="Planet1">
            </div>
    </div>
    </div>
<!--This is the footer-->
<?php include("inc/footer.html");?>
</body>
</html>