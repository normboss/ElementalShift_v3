<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "chakra";
// echo __DIR__;
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
    <title>Elemental Shift | Chakra Clearing and Balancing</title>
    <meta name="description" content="Method to clear & balance Chakras helps you reconnect with yourself, release stuck patterns and move into deep relaxation. Kirsten Jettinghoff, Eden Energy Medicine Certified Practitioner.">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/chakra.css" media='screen' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">

</head>

<body onresize="myResize()">


    <!--<header id="header"></header>-->
    <?php require './includes/header.php' ?>

    <!-- <div class="header-image">
                 <div class="chakra-page">
                  <br>
                  <span>Clear & </span><span>Balance</span>
                  <span>Your Chakras</span>
                </div> 
            </div> -->
    <?php 
    require "./includes/chakraHeader1.php" 
    ?>

    <br>
    <main>
        <br>
        <div class="lone-section">
            <div class="chakras-paragraph">
                <span class="chakras-word">Chakras </span>are&nbsp;spinning energy vortexes responsible for
                processing and storing significant emotional life experiences. When balanced they can optimally
                support our health and be a reservoir of information about how we move through life.
            </div>
        </div>
        <br><br>

        <div class="upper-section">
            <div class="relaxation chakras-header">Promote relaxation</div>
            <div class="chakras-paragraph">
                Chakras help influence different hormones. They also serve to energize the vital organs.
                Clearing and balancing helps with regulation of body chemistry and strengthens overall health.
            </div>
            <div class="chakras-header">
                Deepen awareness
            </div>
            <div class="chakras-paragraph">
                Chakras hold and process energy related to major life themes. Connecting into our chakras
                can help identify patterns that may be holding us back form living our fullest potential.
                Bringing these patterns to conscious awareness can help us gently let them go.
                Chakra clearing provides an opportunity to reconnect with parts of ourselves that
                because of outworn habits may have been closed off to us.
            </div>
            <div class="chakras-header">
                Chakra balancing sessions
            </div>
            <div class="chakras-paragraph">
                Chakra Clearing and Balancing is a technique developed by Donna Eden, creator of Eden Energy Medicine.
            </div>
            <div class="chakras-paragraph">
                Sessions are sixty minutes experienced lying on a massage table, fully clothed.
                A discussion to discern any health or emotional stressors, and any specific goals begins the session.
                This is followed by a gentle energy balance that is designed to move you into a state of deep
                relaxation and allow your body to open to transformation in a harmonious way.
            </div>
            <div class="chakras-paragraph">
                The experience may be simply peaceful and relaxing, it can also be highly symbolic
                and stimulating of creativity. In order to integrate changes, simple exercises to practice
                at home may be recommended.
            </div>
            <br>
        </div>
        <br>
        <br>
        <div class="lone-section">
            <div class="chakras-header">Themes of the seven major Chakras
            </div>
            <div class="spacer20"></div>
            <div class="chakras-paragraph">
                When we tune into the energy of our Chakras we may uncover new vital understanding
                of the course of our journey through life.
            </div>
        </div>


        <div class="lower-section">
            <div class="mandala-image">
                <img src="./images/mandala3.jpg">
            </div>
            <div class="copy">
                <span class="root-chakra">Root Chakra: </span> <span>instinct, the urge for life</span>
                <span class="womb-chakra">Womb Chakra: </span><span>creativity, joy, intuition</span>
                <span class="solar-plexus-chakra">Solar Plexus Chakra: </span><span> identity and power</span>
                <span class="heart-chakra">Heart Chakra: </span><span> love and connection</span>
                <span class="throat-chakra">Throat Chakra: </span><span> integration of information and expression</span>
                <span class="third-eye-chakra">Third Eye Chakra: </span><span> insight, vision, extra sensory perception</span>
                <span class="crown-chakra">Crown Chakra: </span><span> spiritual connection</span>
            </div>
        </div>

    </main>
    <br><br>
    <div class="appointment-block">
        <?php require "./includes/appointment.php" ?>
    </div>
    <br><br>
    <?php require './includes/footer.php' ?>

    <script>

    </script>


</body>

</html>