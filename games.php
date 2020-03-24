<!--This connects the database to this file-->
<?php include("inc/variables.php");?>
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
    <!--This is the header-->
        <?php include("inc/Header.html");?>
        <!--This makes it possible to print out of the database-->
        <?php include("inc/database.php");?>
        <div class="category<?php
                //This gives every category a different class
                if(isset($_GET["gameCategoryId"]))
                {
                    if ($_GET["gameCategoryId"] == 1)
                    {
                        echo '-ps4';
                    }
                    else if ($_GET["gameCategoryId"] == 2)
                    {
                    echo '-xbox';
                    }
                    else if ($_GET["gameCategoryId"] == 3)
                    {
                        echo '-pc';
                    }
                } ?>"><h1 class="title">
                Games
                <?php
                //This echo's the header out of the database
                if(isset($_GET["gameCategoryId"]))
                {
                    if ($_GET["gameCategoryId"] == 1)
                    {
                        echo "(Playstation)";
                    }
                    else if ($_GET["gameCategoryId"] == 2)
                    {
                        echo "(Xbox)";
                    }
                    else if ($_GET["gameCategoryId"] == 3)
                    {
                        echo "(PC)";
                    }
                }
                ?>
            </h1>
            </div>
            <div class="products-container">
                <?php
            foreach($games as $key => $game)
            {
                ?>
                <!--This echo's the products from out of the database-->
                <div class="Product-item">
                <div class="Picture"><img src=images/<?php echo $game['GameImage'];?> alt="Games" class="Gamesimage"></div>
                <a class="price">€<?php echo $game['GamePrice'];?></a>
                <div class="NameDesc"><a class="Name"><?php echo $game['GameTitle'];?></a><br><?php echo $game['GameDesc'];?></div>
                <a href="checkoutpage.php"><button class="Purchase">PURCHASE</button></a>
                </div>
                <?php
            }
            ?>
        <!--This is the clearfix-->
        <div class="clearfix"></div>
        </div>
    <!--This is the footer-->
    <?php include("inc/footer.html");?>
</div>
</body>
</html>