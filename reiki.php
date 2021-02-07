<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "reiki";
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
    <title>Elemental Shift | Reiki a Japanese form of energy healing</title>
    <meta name="description" content="Usui Reiki and Karuna Reiki® Master Kirsten Jettinghoff uses traditional Japanese form of energy healing to relieve stress & pain, improve energy, promote physical, mental, emotional and spiritual healing.">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="./css/reiki.css" media="screen" rel="stylesheet" type="text/css"> -->
    <link href="./css/reiki.css" media='screen' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
    <script>
        $(function() {
            //        $("#header").load("header.html");
            //        $("#footer").load("footer.html");
        });
    </script>

</head>

<body onresize="myResize()">

    <?php require './includes/header.php' ?>

    <div class="heading">
        <span class="page-title-red">Reiki</span><span class="page-title-light">: Promoting Health and Wellness</span>
    </div>
    <br>

    <main>
        <div class="header-image">
            <img src="./images/reiki_symbol3.jpg">
        </div>

        <div class="first-block">
            <div class="paragraph">
                <p><span class="show-numbers">1</span>Reiki (pronounced ray-key) is a powerful, yet subtle and gentle form of energy healing.
                    The Japanese term is made up of Rei, meaning “Divine Intelligence”, and Ki, “Life Force Energy”,
                    <span id="more1">
                        and can be translated as “Divinely guided healing energy of the Universe.”
                        Reiki is essentially a method of concentrating this energy so that we can more directly
                        and effectively experience its benefits.
                        <br><br>
                        We all have the capacity to support our own healing. Reiki promotes healing on the
                        physical, mental, emotional, and spiritual levels by working with the body’s natural
                        inclination to heal. It can help us to release energy blockages as well as emotional
                        patterns that no longer serve us.
                    </span>
                    <br>
                    <button onclick="myFunction1()" id="myBtn1">Read more</button>
                </p>
            </div>
        </div>
        `
        <div class="block">
            <div class="block5">
                <div class="heading">
                    <span class="show-numbers">5</span>Reiki Can Help
                </div>
                <ul class="paragraph">
                    <li><span class="show-numbers">7</span>Increase energy and sense&nbsp;of&nbsp;well&#8209;being</li>
                    <li>Encourage&nbsp;restful&nbsp;sleep</li>
                    <li>Relieve of aches and&nbsp;pains</li>
                    <li>Stimulate the immune&nbsp;system</li>
                    <li>Aid transition through intense emotional&nbsp;stress</li>
                    <li>Cope with major physical&nbsp;illness</li>
                    <li>Accelerate post-operative&nbsp;healing</li>
                    <li>Enhance your preventative health&nbsp;care&nbsp;regimen</li>
                    <li>Gain clarity and momentum to reach&nbsp;personal&nbsp;goals</li>
                    <li>Develop greater spiritual&nbsp;awareness</li>
                </ul>
            </div>
        </div>
        <div class="block spacer20"></div>

        <div class="block block12 paragraph"><span class="show-numbers">12</span>
            <div class="heading">
                Reiki Treatments
            </div>
            <div class="paragraph">
                <p>Reiki sessions begin with a discussion of the process and
                    the current issues and goals for treatment. Lying on a massage
                    table or it may be done in a seated position;
                    treatment is given with hands on or slightly above the body.
                    <span id="more2">
                        Reiki energy may be focused upon the Chakras with an intention
                        to remove energy blockages and produce balancing, relaxation
                        and grounding.
                        <br><br>
                        Everyone’s healing process is unique. How one experiences a
                        Reiki treatment can vary. Some people may not feel anything
                        distinct; others may feel sensations of heat, coolness, or tingling.
                        Some may experience an intense emotional release, while others
                        may feel a deep sense of relaxation or even fall asleep.
                        <br><br>
                        Reiki is not a substitute for medical or psychological treatment.
                    </span>
                    <br>
                    <button onclick="myFunction2()" id="myBtn2">Read more</button>
                </p>

            </div>
        </div>
        <div class="block spacer20"></div>

        <div class="block block13">
            <div class="block13">
                <div class="heading">
                    <span class="show-numbers">11</span>The Five Reiki Principles
                </div>
                <ul class="paragraph">
                    <li>Just for today, do&nbsp;not&nbsp;worry.</li>
                    <li>Just for today, do&nbsp;not&nbsp;anger.</li>
                    <li>Honor your parents, teachers,&nbsp;and&nbsp;elders.</li>
                    <li>Earn your living&nbsp;honestly.</li>
                    <li>Show gratitude for every&nbsp;living&nbsp;thing.</li>
                </ul>
            </div>
        </div>
        <div class="block spacer20"></div>
        <div class="block appointment-block">
            <?php require "./includes/appointment.php" ?>
        </div>



    </main>
    <br><br>
    <div class="joy">
        <div class="quote2">
            May you know the joy of living your own true nature.
        </div>
        <br>
    </div>
    <br>
    <?php require './includes/footer.php' ?>

    <script>
        function myResize() {}
    </script>
    <script>
        var moreText1 = document.getElementById("more1");
        var btnText1 = document.getElementById("myBtn1");
        btnText1.innerHTML = "Read more";
        moreText1.style.display = "none";

        function myFunction1() {
            if (moreText1.style.display === "inline") {
                btnText1.innerHTML = "Read more";
                moreText1.style.display = "none";
            } else {
                btnText1.innerHTML = "Read less";
                moreText1.style.display = "inline";
            }
        }

        var moreText2 = document.getElementById("more2");
        var btnText2 = document.getElementById("myBtn2");
        btnText2.innerHTML = "Read more";
        moreText2.style.display = "none";

        function myFunction2() {
            if (moreText2.style.display === "inline") {
                btnText2.innerHTML = "Read more";
                moreText2.style.display = "none";
            } else {
                btnText2.innerHTML = "Read less";
                moreText2.style.display = "inline";
            }
        }
    </script>

</body>

</html>