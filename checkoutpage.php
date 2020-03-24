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
        <!--This is the checkout table-->
        <table id="checkout-table">
        <!--This is the header-->
            <thead>
                <!--This the information in the table header-->
                <tr>
                    <th>Image</th>
                    <th>Game</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <!--This is the table body-->
            <tbody>
                <!--This is the information in the table body-->
                <tr>
                    <!--This is the image used in the tablerow-->
                    <td><img src="images/Fortnite.jpg" alt="Fortnite" class="tableimage"></td>
                    <!--This is the title in the tablerow-->
                    <td>Fortnite</td>
                    <!--This it the table description-->
                    <td>Fortnite is a survival game where 100 players fight against each other <br> 
                        in player versus player combat to be the last one standing.<br>
                        It is a fast-paced, action-packed game, not unlike The Hunger Games, <br>
                        where strategic thinking is a must in order to survive..</td>
                    <!--This is the price of the game-->
                    <td>&euro; 20,-</td>
                </tr>
                <!--This is the second table row in the table body-->
                <tr>
                    <!--This is the image used in the tablerow-->
                    <td><img src="images/nfsh.png" alt="nfsh" class="tableimage"></td>
                    <!--This is the title in the tablerow-->
                    <td>Need<br>
                        For<br>
                        Speed<br>
                        Heat</td>
                    <!--This it the table description-->
                    <td>Need for Speed Heat is a racing game set in an open world <br>
                        environment called Palm City, a fictionalised version of the city of Miami, <br>
                        Florida and its surrounding area. The in-game map features diverse geography, <br> 
                        including mountainous areas and open fields.</td>
                    <!--This is the price of the game-->
                    <td>&euro; 30,-</td>
                </tr>
                <tr>
                    <!--This is the image used in the tablerow-->
                    <td><img src="images/CODMW.jpg" alt="CODMW" class="tableimage"></td>
                    <!--This is the title in the tablerow-->
                    <td>Call<br>
                        Of<br>
                        Duty<br>
                        Modern<br>
                        Warfare</td>
                    <!--This it the table description-->
                    <td>Call of Duty: Modern Warfare is a first-person shooter <br> 
                        video game developed by Infinity Ward and published by Activision.<br>
                        The game's Special Ops mode features cooperative play missions that follow up the campaign's story.<br>
                        The multiplayer mode supports cross-platform multiplayer for the first time in the series.</td>
                    <!--This is the price of the game-->
                    <td>&euro; 54,99</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <!--This is the end price-->
                    <td colspan="4">&euro; 104,99</td>
                </tr>
            </tfoot>
        </table>
<!--This is the footer-->
<?php include("inc/footer.html");?>
</body>
</html>