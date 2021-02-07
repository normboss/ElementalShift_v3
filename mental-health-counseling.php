<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "counsel";
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
    <title>Elemental Shift | Counseling by a Licensed Mental Health Counselor</title>
    <meta name="description" content="Therapy for treatment of addiction, stress, pain, loneliness and relationship problems. Specializing in Recovery and co-dependency. ">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Addiction, trauma, recovery">
    <link href="./css/counsel.css" media='screen' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
</head>

<body>

    <?php require './includes/header.php'; ?>

    <main>
        <div class="header-image">
            <!-- <h1 id="counseling">Counseling</h1> -->
        </div>
        <br><br><br>
        <div class="text-block">
            <div class="text">
                <span class="bold">As a Licensed Mental Health Counselor</span>, I see my primary role is helping you bring awareness to what is really true for you; providing empathetic space for acceptance of your experience; and to foster your inner resources to take action for lasting positive change. When appropriate I incorporate alternative modalities that support talk therapy.
            </div>
            <br>
            <div class="text bold-text">
                Things I can help you with:
            </div>
            <!-- <div class="text"> See yourself as a successful problem solver.</div>
            <div class="text">Learn how to take better care of yourself in challenging situations.</div>
            <div class="text">Find ways to feel less lonely.</div>
            <div class="text">Learn how to improve coping with addiction, either yours or someone else’s.</div>
            <div class="text">Feel less stressed out at work.</div>
            <div class="text">Decrease stress related to chronic pain or other health issues.</div>
            <div class="text">Improve relationships with the people closest to you.</div> -->

            <ul>

                <li class="text"> See yourself as a successful problem solver.</li>
                <li class="text">Learn how to take better care of yourself in challenging situations.</li>
                <li class="text">Find ways to feel less lonely.</li>
                <li class="text">Learn how to improve coping with addiction, either yours or someone else’s.</li>
                <li class="text">Feel less stressed out at work.</li>
                <li class="text">Decrease stress related to chronic pain or other health issues.</li>
                <li class="text">Improve relationships with the people closest to you.</li>
            </ul>

            <br>
            <div class="text">
                I specialize in Recovery work. If you feel overwhelmed or diminished by challenging
                circumstances, addiction or trauma — counseling opens the door to successful change.
                Recovering your true self opens the way to living the joy of your own true nature.
            </div>
        </div>
        <br><br><br>
        <!-- <div class="the-image">
            <img src="./images/door_light1.png">
        </div> -->
        <br>
        <div class="joy">
            <div class="quote2">
                May you know the joy of living your own true nature.
            </div>
        </div>
        <br><br><br>

        <div class="appointment-block">
            <?php require './includes/appointment.php' ?>
        </div>
        <br><br><br>
    </main>

    <?php require './includes/footer.php' ?>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script src="js/jquery/jquery-1.10.1.min.js"></script>
    <script>
        var text = document.getElementById("counseling");

        if (text !== null) {
            gsap.from(text, 4, {
                opacity: 0,
                scale: ".01",
                ease: "power1.out",
                delay: 0
            });

            gsap.to(text, 4, {
                opacity: 0,
                // scale: ".01",
                ease: "power1.in",
                delay: 5
            });
        }
    </script>
 -->

</body>

</html>