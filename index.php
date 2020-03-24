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
        <!--This is the image division with the whole middle part of the webpage in it-->
        <div class="image">
        <a href="index.php">
            <img src="images/planet.png" alt="planet" class="Planet">
        </a>
            <!--This is the division of the text in the middle part of the page-->
            <div class="WelcomeBest">
                <!--This is the Welcome text-->
                <a id="Welcome">Welcome to the Planet of Games!</a>
                <!--This is the best text-->
                <a id="Best">The best online gaming webshop.</a>
                <!--This is the Noman picture-->
                <img src="images/Noman.jpg" alt="Noman" class="Noman">
            </div>
        </div>
        <!--This is the consoles division with all of the console buttons inside of it-->
        <div class="consoles">
            <!--This is the ps4 box-->
            <div class="ps4 boxes">
            <a href="games.php?gameCategoryId=1">
                <img src="images/ps4.png" alt="playstation" class="ps41">
            </a>
            </div>
            <!--This is the xbox box-->
            <div class="xbox boxes">
                <a href="games.php?gameCategoryId=2">
                    <img src="images/xbox.png" alt="xbox" class="xbox1">
                </a>
            </div>
            <!--This is the pc box-->
            <div class="pc boxes">
                <a href="games.php?gameCategoryId=3">
                    <img src="images/PC.png" alt="pc" class="pc1">
                </a>
            </div> 
            <!--This is the clearfix which fixes the divisions-->
            <div class="clearfix"></div>
        </div>
<!--This is the footer-->
<?php include("inc/footer.html");?>
</div>
</body>
</html>