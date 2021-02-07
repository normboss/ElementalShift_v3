<?php
if (!session_id())
    session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Elemental Shift</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link href="./css/contact.css" media="screen" rel="stylesheet" type="text/css"> -->
        <?php 
        echo "<link href=".$_SESSION['root'].'/files/css/contact.css'." media='screen' rel='stylesheet' type='text/css'>";
        echo "<link rel='shortcut icon' type='image/x-icon'".$_SESSION['root']."'/files/images/favicon.ico'>";
        ?>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
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
  require 'header.php'
?>
        <br><br>
        <div class="contact-container">
            
            <div class="box main-copy">
                <h1>Contact Kirsten</h1>
                <p>If you are experiencing a mental health emergency call 911 or go to 
                    the nearest emergency room.</p>
                <p>Telephone: (207) 671-HEAL (4325) </p>
                <p>Please leave a message. Kirsten will return your call as quickly as possible. </p>
                <p>To make an appointment or for more information please use the form below. 
                    Thank you.</p>
            </div>
            <div class="box image">
                <!-- <img src="./images/sun_wood.png"> -->
                <?php echo "<img src='".$_SESSION['root']."/files/images/sun_wood.png'>" ?>

            </div>
            <div class="box form-container">
                <form method= "post" class="contactform" action="https://www1.domain.com/scripts/formemail.bml" name="contactform">

                    <!--A hidden tag. This tag means it cannot be seen by your customers and tells the 
                    form where to e-mail the contents of the form. -->
                  <!--<input type="hidden" name="my_email" value="norm.bosse0@gmail.com">-->
                    <input type="hidden" name="my_email" value="leck@midcoast.com">

                    <!--How to create an input field
                    Create an input field for each piece of data you wish to collect
                    To create an input field you can use a tag such as this: -->
                  <!--<input type="text" name="fieldname" size="25">--> 

                    <!--For example if you wanted to create a input field called fullname it would look like this: -->
                  <!--<input type="text" name="fullname" size="25">-->
                    <label for="first_name">First Name *</label> 
                    <input maxlength="50" name="first_name" size="40" type="text"> 
                    <label for="last_name">Last Name *</label>
                    <input maxlength="50" name="last_name" size="40" type="text"> 
                    <label for="email">Email Address *</label> 
                    <input maxlength="80" name="email" size="40" type="text">
                    <label for="telephone">Telephone Number</label> 
                    <input maxlength="40" name="telephone" size="40" type="text"> 
                    <label for="comments">Comments *</label>
                    <textarea cols="40" maxlength="1000" name="comments" rows="5"></textarea>

                    <!--Customizing the default subject line 
                        You can customize the default subject line by using this hidden tag and replacing 
                        subject with what you want the subject to be 
                    -->
                  <!--<input type="hidden" name="subject" value="subject">-->

                    <!--Including an input field into the e-mail subject line
                        If you want to include one of the input fields in the return e-mail's subject field, 
                        all you need to do is replace "Subject" in your code with the NAME of the field surrounded by %%. 
                        For example, if your form contains a field named firstname, it would look like this
                    -->
                    <input type="hidden" name="subject" value="form submission from %%first_name%%">

                    <!-- Making an input field required
                        If you want to make a certain input field required in your form. Use the following tag
                    -->
                    <input type="hidden" name="required" value="first_name,last_name,email,comments"> 
                    <!-- For example, if you were making the field named emailadress and firstname, your tag would look like this 
                        Note: "required" must be in lower-case letters to be recognized by our processor; name="REQUIRED" may not work. <input type="hidden" name="required" value="emailaddress, firstname">
                    -->
                    <!--
                        Customizing the pages seen after form completion
                        You can send your visitors to various URLs after they have completed the form.
                        To send them to a specific page after they have completed the form successfully by using the tag below and replacing "yoururl" with the page name. The URL does not have to be on your site or even hosted with Domain.com. It is best to use full path names (http://www.yoursite.com/page.html) and not local paths (/page/html).
                    -->
                    <input type="hidden" name="thankyou_url" value="https://www.scottishwroughtiron/thankyou.html">

                    <!-- If a customer fills out your form incorrectly, you can customize the "error" page by they see inserting the following line of code in your form:
                    -->
                  <!--<input type="hidden" name="error_url" value="yoururl">-->

                    <!-- Changing the order of your form results
                         By default, the results of your form are displayed alphabetically by field name
                        To change this order,you will need to use the following syntax.
                    -->
                    <input type="hidden" name="order" value="first_name,last_name,email,telephone,comments">
                    <!-- Adding a blind carbon copy (bcc) e-mail address
                        You can have an e-mail address as an blind carbon copy to the results of your form.
                        Use the following syntax to add a bcc e-mail address:
                    -->
                  <!--<input type ="hidden" name ="bcc" value="bbcemailaddress">-->

                    <!-- Specifying a return e-mail address
                      Have your customers insert their e-mail address into your form.
                      Use the following syntax to have your customers add their e-mail address:
                    -->
                  <!--<input type="text" name="email">-->

                    <!-- Adding Submit and Reset buttons
                      Include buttons to submit your customer's data or reset values. You can change the text 
                      that appears on the button by editing the value field.
                      Use the following syntax to include submit and reset buttons:
                    -->

                    <input class="submit" type="submit" name="submit" value="Submit" >
                    <!--<input type="reset" name="reset" value="Reset" >-->

                </form>
            </div>
                
            
            <div class="box second-copy">
                May you know the joy<br>of living<br>your own true nature.
            </div>
            <!--<div class="box text-area"></div>-->

        </div>
        
<?php
  require 'footer.php'
?>
        
    </body>
</html>
