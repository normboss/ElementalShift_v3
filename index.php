<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "index";
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
    <title>Holistic counseling by Kirsten Jettinghoff | Elemental Shift</title>
    <meta name="description" content="Psychotherapy with mind-body focus: healing support for life issues and tools for deep and lasting healing and health, including NET, EFT and Energy Medicine.">


    <title></title>
    <meta name="description" content="">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Holistic , healing, Alcohol Abuse,
            Anxiety,Behavioral Issue,Chronic Pain,Coping Skills,Co-dependency,Depression,
            Family Conflict,Grief and Loss,Life Coaching,Mood Disorders,Relationship Issues,
            Self Esteem,Spirituality,Stress,Substance Abuse,Trauma,PTSD">

    <link href="./css/index.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
    <script>
        //      $(function () {
        //        $("#header").load("header.html");
        //        $("#footer").load("footer.html");
        //      });
    </script>

</head>

<body onresize="myResize()">
    <?php

    ?>
    <br><br>
    <header id="header"></header>
    <?php
    require "./includes/header.php";
    ?>
    <br><br>
    <main>
        <div class="header-block">
            <div class="pre-text box"></div>

            <div class="text box">
                <div class="image1">
                    <img src="./images/holistic450.png" class="holistic-image image1">
                </div>
                <img src="./images/personal_transparent1.png" class="holistic-image">
                <img src="./images/brass_bowl_transparent1.png" class="holistic-image">
            </div>

        </div>

        <div class="content">

        </div>
        <br>

        <div class="kirsten">
            <div class="quote3">
                May you know the joy of living your own true nature.
            </div>
        </div>
        <br>
        <div class="spacer20"></div>
        <br>

        <div class="lower-content1">
            <div class="kirsten-image">
                <img src="./images/kirsten3.jpg">
            </div>

            <div class="paragraph9">
                <div id="moretext">
                    “I enjoy helping adults gain greater
                    satisfaction in relationships, including
                    the most important one; the relationship
                    with oneself.
                    Grow beyond lifelong issues, replace
                    feeling overwhelmed with feeling peace.
                    Let me help you learn how to celebrate
                    every step taken on life’s journey.”
                </div>
            </div>
        </div>

        <div class="kirsten-join1">
            <div class="paragraph3">
                Join Kirsten Jettinghoff, Licensed Mental Health Counselor on your personal adventure of discovery and healing.
            </div>
        </div>
        <br>
        <br>

        <div class="video-block">
            <div class="video-block__video">
                <a href="https://www.youtube.com/watch?v=RSF8z50nz70&feature=emb_title">
                    <img src="./images/covid19.png">
                </a>
            </div>
            <div class="video-block__text">
                "As we go through this stressful time of social distancing during the corona virus outbreak,
                I share this video with you from Donna Eden and David Feinstein, PhD.
                The pair offer simple yet powerful tools to keep your body’s immune
                system strong and to better cope with stress.
                <br>
                Feel free to contact me if you have any questions."
                <br>
            </div>
        </div>


        <?php require './includes/issues1.html' ?>

        <br><br>
        <div class="appointment-block">
            <?php require './includes/appointment.php' ?>
        </div>
    </main>
    <br>
    <br>

    <!--<footer id="footer"></footer>-->
    <?php require './includes/footer.php' ?>
    <script>
        function myResize() {
            var size = $(window).width();
            if (size < 800) {
                $('#content-id').attr('src', './images/index_image1a.jpg');
            } else {
                $('#content-id').attr('src', './images/index_image.jpg');
            }
        }
    </script>

</body>

</html>