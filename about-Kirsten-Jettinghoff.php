<?php
// echo __DIR__;

if (!session_id())
    session_start();
$_SESSION['pagename'] = "about";
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
    <title>Elemental Shift | Information about Kirsten Jettinghoff, LMHC</title>
    <meta name="description" content="Mind-body psychotherapist offering counseling tools to help you heal, grow, and create more peace. PSYCH-K practitioner, Emotional Freedom Technique practitioner, Eden Energy Medicine certified practitioner, Karuna Reiki® and Traditional Usui Reiki master and certified feng shui consultant.">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="Psychology, non-violent communication,
            Feng Sui,Alcohol Abuse,Anxiety,Behavioral Issue,Chronic Pain,Coping Skills,
            Co-dependency,Depression,Family Conflict,Grief and Loss,Life Coaching,Mood Disorders,
            Relationship Issues,Self Esteem,Spirituality,Stress,Substance Abuse,Trauma,PTSD">

    <!-- <link href="./css/about.css" media="screen" rel="stylesheet" type="text/css"> -->
    <link href="./css/about.css" media='screen' rel='stylesheet' type='text/css'>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
    <script>
        //            $(function () {
        //                $("#header").load("header.html");
        //                $("#footer").load("footer.html");
        //            });
    </script>

</head>

<body onresize="myResize()">

    <!--<header id="header"></header>-->
    <?php require './includes/header.php' ?>


    <main>
        <br><br>
        <div class="top-section">

            <div class="header3 box">Kirsten Jettinghoff, LMHC</div>
            <div class="paragraph1 box">
                Kirsten is a Licensed Mental Health
                Counselor with twenty years experience.
                She earned a Master’s in Counseling
                Psychology from Lesley&nbsp;College
                (now&nbsp;Lesley&nbsp;University).
            </div>

            <div class="image box">
                <img id="kirsten-image" src="./images/kirsten_head_pink.jpg" alt="" />
                <!--<img id="kirsten-image" src="./images/kirsten_j3.jpg">-->

            </div>
            <div class="header2 box">Holistic Approach</div>
            <div class="paragraph2 box">
                <div class="my-experience">"My experience has drawn me to methods that focus on the relationship between mind and body.
                    My desire for a holistic, integrative approach to healing has led me to study and incorporate additional
                    modalities. I continue to explore and learn ways to improve and expand personally and professionally.”
                </div>
                <!--<br>-->
                <!-- <div class="signature">Kirsten Jettinghoff, LMHC</div> -->
            </div>

        </div>

        <br>
        <br><br>
        <div class="bottom-section box">
            <div class="header2">Additional Qualifications</div>
            <!-- <ul class="paragraph2">
                <li>Traditional Usui Reiki Master&nbsp;since&nbsp;2003<a href="https://www.reiki.org"> www.reiki.org</a></li>
                <li>Karuna&nbsp;Reiki&nbsp;&reg;&nbsp;Master <a href="https://www.reikiclasses.com">www.reikiclasses.com</a> </li>
                <li>Komyo Reiki Shihan</li>
                <li>NVC - Nonviolent Communication <a href="https://www.cnvc.org">www.cnvc.org</a></li>
                <li>EFT - Emotional Freedom Technique <a href="https://www.energypsych.org">www.energypsych.org</a></li>
                <li>EEM CP - Eden Energy Medicine Certified Practioner <a href="https://www.innersource.net">www.innersource.net</a></li>
                <li>PSYCH–K&nbsp;Practitioner <a href="https://www.psych-k.com">www.psych&#8209;k.com</a></li>
                <li>Certified Feng Sui Consultant, Black&nbsp;Tantric&nbsp;Buddhist School&nbsp;of&nbsp;Feng&nbsp;Shui&nbsp;(BTB)</li>
            </ul>
            <br><br> -->
            <ul class="paragraph2">

                <li>NET Certified Practitioner <a href="https://www.netmindbody.com"> www.netmindbody.com</a></li>

                <!-- EFT - Emotional Freedom Technique practitioner www.eftuniverse.com -->
                <li> EFT - Emotional Freedom Technique practitioner <a href="https://www.eftuniverse.com">www.eftuniverse.com</a></li>


                <!-- EEM CP - Eden Energy Medicine Certified Practitioner www.edenenergymedicine.com -->
                <li> EEM CP - Eden Energy Medicine Certified Practitioner <a href="https://www.edenenergymedicine.com">www.edenenergymedicine.com</a></li>

                <!-- PSYCH-K Practitioner www.psych-k.com -->
                <li>PSYCH–K&nbsp;Practitioner <a href="https://www.psych-k.com">www.psych&#8209;k.com</a></li>

                <!-- NVC - Nonviolent Communication www.cnvc.org excellent resource to improve quality of all your relationships -->
                <li> NVC - Nonviolent Communication <a href="https://www.cnvc.org">www.cnvc.org</a> excellent resource to improve quality of all your relationships</li>


                <li>Traditional Usui Reiki Master&nbsp;since&nbsp;2003<a href="https://www.reiki.org"> www.reiki.org</a></li>
                <li>Karuna&nbsp;Reiki&nbsp;&reg;&nbsp;Master <a href="https://www.reikiclasses.com">www.reikiclasses.com</a> </li>
                <li>Komyo Reiki Shihan (Teacher)</li>
                <li>Certified Feng Shui Consultant, Black Tantric Buddhist School of Feng Shui (BTB)
                    Feng Shui is one of the most powerful and uplifting ways to change your life for the better and add harmony to your home.
                </li>


            </ul>
        </div>

        <br><br>

        <?php require './includes/issues1.html'; ?>
        <br><br><br>

        <div class="appointment-block">
            <?php require './includes/appointment.php' ?>
        </div>

        <br><br><br>

    </main>

    <!--<footer id="footer"></footer>-->
    <?php require './includes/footer.php' ?>
    <script>
        function myResize() {
            //                var size = $(window).width();
            //                if (size < 500) {
            //                    $('#kirsten-image').attr('src', './images/kirsten_j2.jpg');
            //                } else {
            //                    $('#kirsten-image').attr('src', './images/kirsten_j3.jpg');
            //                }
        }
    </script>

</body>

</html>