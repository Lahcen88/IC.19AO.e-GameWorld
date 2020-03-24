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
    <!--This is the contact division-->
    <div class="Contact">
        <!--This is the Business header-->
        <h1>Contact.</h1>
    <!--This is the first text division-->
    <div class="Text">
        <!--This is the form-->
        <form id="contact-form" method="post" action="phpmailer/send.php" role="form">
        <ul>
            <div class="messages"></div>

            <div class="controls">

            <div class="row">
                 <div class="col-md-6">
                    <div class="form-group">
                    <li>
                        <label for="form_name">Firstname *</label>
                    </li>
                    <li>
                        <input class="input1" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    </li>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <li>
                        <label for="form_lastname">Lastname *</label>
                    </li>
                    <li> 
                        <input class="input1" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    </li>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <li>
                        <label for="form_email">Email *</label>
                    </li>
                    <li>    
                        <input class="input1" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    </li>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <li>
                        <label for="form_need">Please specify your need *</label>
                    </li>
                    <li>
                        <select class="input1" name="need" class="form-control" required="required" data-error="Please specify your need.">
                            <option value="">--</option>
                            <option value="Problem with ordering">Order problem</option>
                            <option value="Request order status">Request order status</option>
                            <option value="Problem with account">Problem with account information</option>
                            <option value="">Delivery problem</option>
                            <option value="Other">Other</option>
                        </select>
                    </li>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <li>
                        <label for="form_message">Message *</label>
                    </li>
                    <li>
                        <textarea class="input" name="question" class="form-control" placeholder="..." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    </li>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <input type="submit" class="submit" value="Submit">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-muted">
        </div>
    </div>
</div>
</ul>
</form>
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