<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "contact";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <?php
    require './includes/globalSiteTag.html';
    ?>
    <title>Elemental Shift | Contact Information</title>
    <meta name="description" content="How to contact Kirsten Jettinghoff via phone or email. Includes directions to Massachusetts office.">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/contact.css" media="screen" rel="stylesheet" type="text/css">
    <link rel='shortcut icon' type='image/x-icon' href="./images/favicon.ico">
    <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
    <script>
        //      $(function () {
        //        $("#header").load("header.html");
        //        $("#footer").load("footer.html");
        //      });
    </script>

</head>

<body>

    <!--<header id="header"></header>-->
    <?php
    require './includes/header.php'
    ?>
    <div class="contact-container">

        <div class="box main-copy">
            <h1>Contact Kirsten</h1>
            <div class="italic">If you are experiencing a mental health emergency call 911 or go to the nearest emergency room.</div>
            <p><span class="telephone">Telephone: </span><a href="tel:1-207-671-4325">(207)&nbsp;671&#8209;HEAL&nbsp;(4325)</a></p>
            <p>Please leave a message and Kirsten will return your call. </p>
        </div>

        <div class="box image">
            <img src="./images/sun_wood.png">
        </div>

        <div class="box info-container">
            <div>Office Location</div>
            <br>
            <div>The office is located in the Westford&nbsp;Commons&nbsp;Building,</div>
            <div>234 Littleton Road, Westford,&nbsp;Massachusetts.</div>
            <br>
            <div>Please drive half way down the left side of the building</div>
            <div>and use the entrance there. Walk straight back to the </div>
            <div>waiting room in Suite 1D.</div>
            <!-- <div class="map">
        <iframe width="120" height="80" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=43.9932053,-69.53366699999998&amp;q=587%20Bristol%20Rd%20Bristol%2C%20ME%2004539+(Maine%20Village%20Weaver)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
          <a href="https://www.maps.ie/create-google-map/">Create Google Map</a>
        </iframe>
      </div> -->
            <br>
            <div class="map">
                <div class="inner-map">
                    <iframe width="250" height="250" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=234%20Littleton%20Rd%2C%20Westford%20MA+(Elemental%20Shift)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        <a href="https://www.maps.ie/map-my-route/">Create a route on google maps</a>
                    </iframe>
                </div>
            </div>
            <br>

            <!--<h2>Visit</h2>-->

        </div>

        <br><br><br>
        <div class="box second-copy">
            May you know the joy<br>of living<br>your own true nature.
        </div>
        <br>
        <!--<div class="box text-area"></div>-->

    </div>

    <?php require './includes/footer.php' ?>

</body>

</html>