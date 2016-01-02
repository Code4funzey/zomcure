<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alex Hunt | Welcome to my portfolio</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
      <div class="page-wrapper"><!-- Wraps the whole page. -->













    <!-- NAVIGATION INCLUDE -->
    <!-- NAVIGATION INCLUDE -->
<?php include("navigation-2.php");?>
    <!-- END NAVIGATION INCLUDE -->
    <!-- END NAVIGATION INCLUDE -->













    <!-- BODY PAGE CONTENT. -->
    <!-- BODY PAGE CONTENT. -->
    <div class="body-content">
    <div class="body-content-white">
      <div class="row">   
        <div class="large-12 columns margin-bottom">
          <div class="large-12 columns crumbs">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li> > Contact</li>
            </ul>

          </div>
          <div class="large-12 columns">
            <h2>Contact</h2>
          </div>
          <div class="large-12 columns crumbs">




<?php
// $form = <<<END
//             <h3 class="text-center">Want to learn more?</h3>
//             <p class="text-center">Fill out this form and I can schedule a call.</p>
//             <form class="white-form" action="" method="post">
//               <label class="label-title" for="name">Your Name:*</label><br>
//               <input class="width100"type="text" name="name"><br>
//               <label class="label-title" for="email">Your Email:*</label><br>
//               <input class="width100"type="email" name="email"><br>
//               <label class="label-title" for="business">Your Business:*</label><br>
//               <input class="width100"type="text" name="business"><br>
//               <label class="label-title" for="phone">Your Phone Number:*</label><br>
//               <input class="width100"type="text" name="phone"><br>
//               <label class="label-title" for="website">Your Website If You Have One:</label><br>
//               <input class="width100"type="text" name="website" value="http://"><br>
//               <label class="label-title" for="initial_budget">Initial Budget:*</label><br>
//               <label><input type="radio" name="initial_budget" value="under-1000">Less than $1000<br></label>
//               <label><input type="radio" name="initial_budget" value="1000-2000">$1000 - $2000<br></label>
//               <label><input type="radio" name="initial_budget" value="2000-4000">$2000 - $4000<br></label>
//               <label><input type="radio" name="initial_budget" value="4000+">$4000+<br></label>
//               <label class="label-title" for="monthly_budget">Monthly Budget:*</label><br>
//               <label><input type="radio" name="monthly_budget" value="Less-than-100">Less than $100<br></label>
//               <label><input type="radio" name="monthly_budget" value="100-200">$100 - $200<br></label>
//               <label><input type="radio" name="monthly_budget" value="300">$300+<br></label>
//               <label class="label-title">I am interested in:* (check all that apply)</label><br>
//               <label><input type="checkbox" name="interested1" value="new-website">A new website</label><br>
//               <label><input type="checkbox" name="interested2" value="updating-old-site">Updating an old website</label><br>
//               <label><input type="checkbox" name="interested3" value="seo">SEO (ranking in search engines)  </label><br>
//               <label><input type="checkbox" name="interested4" value="social-media-marketing">Social Media Marketing</label><br>
//               <label><input type="checkbox" name="interested5" value="photography">Custom photography of your business</label><br>
//               <label class="label-title" for="goal">What is your overall goal:</label><br>
//               <textarea class="width100"name="goal" rows="10"></textarea><br>
//               <label class="label-title" for="hear">How did you hear about me:</label><br>
//               <input class="width100"type="text" name="hear"><br><br> 
//               <div class="text-center">
//                 <input class="form-button" type="submit" value="Recieve A Quote!">
//               </div>
//             </form> 
// END;

$form2 = <<<END
            <h3 class="text-center">Want to learn more?</h3>
            <p class="text-center">Fill out this form and Contact Us:
Speak with a Zomcure treatment specialist.</p>
            <form class="white-form" action="" method="post">
              <label class="label-title" for="name">Your Name:*</label><br>
              <input class="width100"type="text" name="name"><br>
              <label class="label-title" for="email">Your Email:*</label><br>
              <input class="width100"type="email" name="email"><br>
              <label class="label-title" for="phone">Your Phone Number:*</label><br>
              <input class="width100"type="text" name="phone"><br>
              <label class="label-title" for="initial_budget">How Many Zombies:*</label><br>
              <label><input type="radio" name="initial_budget" value="under-1000"> 1<br></label>
              <label><input type="radio" name="initial_budget" value="1000-2000"> 2 - 9<br></label>
              <label><input type="radio" name="initial_budget" value="2000-4000"> 10 - 50<br></label>
              <label><input type="radio" name="initial_budget" value="4000+"> 50+<br></label>
              <label class="label-title" for="monthly_budget">Total Budget:*</label><br>
              <label><input type="radio" name="monthly_budget" value="Less-than-100">Less than $500 per zombie<br></label>
              <label><input type="radio" name="monthly_budget" value="100-200">$500 - $1000 per zombie<br></label>
              <label><input type="radio" name="monthly_budget" value="300">$1000+ per zombie<br></label>
              <label class="label-title">I am interested in: (check all that apply)</label><br>
              <label><input type="checkbox" name="interested1" value="new-website">Individual Treatment</label><br>
              <label><input type="checkbox" name="interested2" value="updating-old-site">Group Treatment</label><br>
              <label class="label-title" for="goal">What is your overall goal:</label><br>
              <textarea class="width100"name="goal" rows="10"></textarea><br>
              <label class="label-title" for="hear">How did you hear about us:</label><br>
              <input class="width100"type="text" name="hear"><br><br> 
              <div class="text-center">
                <input class="form-button" type="submit" value="Recieve A Quote!">
              </div>
            </form> 
END;


echo $form2;



// if (!isset($_POST['name'])) {
//  echo $form;

// }
// else {

//   if(empty($_POST['name'])) {
//     $name = "unknown name";
//   }
//   else{
//     $name = $_POST['name']; 
//   }
  
//   if(empty($_POST['email'])) {
//     $email = "unknown email";
//   }
//   else{
//     $email = $_POST['email']; 
//   }

//   if(empty($_POST['business'])) {
//     $business = "unknown business";
//   }
//   else{
//     $business = $_POST['business']; 
//   }

//   if(empty($_POST['phone'])) {
//     $phone = "unknown phone";
//   }
//   else{
//     $phone = $_POST['phone']; 
//   }

//   if(empty($_POST['website'])) {
//     $website = "unknown website";
//   }
//   else{
//     $website = $_POST['website']; 
//   }

//   if(!isset($_POST['initial_budget'])) {
//     $initial_budget = "unknown initial_budget";
//   }
//   else{
//     $initial_budget = $_POST['initial_budget']; 
//   }

//   if(!isset($_POST['monthly_budget'])) {
//     $monthly_budget = "unknown monthly_budget";
//   }
//   else{
//     $monthly_budget = $_POST['monthly_budget']; 
//   }

//   if(!isset($_POST['interested1'])) {
//     $interested1 = "unknown interested1";
//   }
//   else{
//     $interested1 = $_POST['interested1']; 
//   }

//   if(!isset($_POST['interested2'])) {
//     $interested2 = "unknown interested2";
//   }
//   else{
//     $interested2 = $_POST['interested2']; 
//   }

//   if(!isset($_POST['interested3'])) {
//     $interested3 = "unknown interested3";
//   }
//   else{
//     $interested3 = $_POST['interested3']; 
//   }

//   if(!isset($_POST['interested4'])) {
//     $interested4 = "unknown interested4";
//   }
//   else{
//     $interested4 = $_POST['interested4']; 
//   }

//   if(!isset($_POST['interested5'])) {
//     $interested5 = "unknown interested5";
//   }
//   else{
//     $interested5 = $_POST['interested5']; 
//   }

//   if(empty($_POST['goal'])) {
//     $goal = "unknown goal";
//   }
//   else{
//     $goal = $_POST['goal']; 
//   }

//   if(empty($_POST['hear'])) {
//     $hear = "unknown hear";
//   }
//   else{
//     $hear = $_POST['hear']; 
//   }



//   $to = "donateandfeelbetter@gmail.com";
//   $from = $_POST['email'];
//   $subject = "Client " . $name . " requesting quote - Large Form";

//   $message = "Name: " . $name . "<br>" . "Email: " . $email . "<br>" . "Business: " . $business . "<br>" . "Phone Number: " . $phone . "<br>" . "Current Website: " . $website . "<br>" . "Initial Budget: " . $initial_budget . "<br>" . "Monthly Budget: " . $monthly_budget . "<br>" . "Intrested in: " . $interested1 . "<br>" . "Intrested in: " . $interested2 . "<br>" . "Intrested in: " . $interested3 . "<br>" . "Intrested in: " . $interested4 . "<br>" . "Intrested in: " . $interested5 . "<br>" . "Overall Goal: " . $goal . "<br>" . "Acquisition: " . $hear . "<br>"; 

//   $header = "From: " . $email;

//   mail($to,$subject,$message,$header);


// $thank_you = <<<thank_you
//           <div class="large-12 columns">
//             <h2>Thank You $name For Contacting Me!</h2>
//           </div>
//           <div class="large-12 columns crumbs">
//             <p>
//               I'm very happy that you have decided to inquire with me about your business. You will soon be receiving an email or phone call depending upon which form you filled out. If during our communication you decided that you want to move forward with an awesome marketing plan to get you more business, then we will schedule a time where we can meet face to face and go over the details. Thanks again, and I am looking forward to our communications.
//               <br>
//               <br>
//               While you are waiting feel free to check out my post... <a href="why-you-should-hire-me.php">Why you should hire me over a big business</a>
//             </p>
//           </div> 
// thank_you;


//   echo $thank_you;


// }

?>
          </div>








        </div><!-- END large-12 -->
      </div><!-- END! of row -->
    </div><!-- END! of body-content-white -->
    </div><!-- END! of body-content -->
    <!-- END! BODY PAGE CONTENT. -->
    <!-- END! BODY PAGE CONTENT. -->











    <!-- Footer include -->
    <!-- Footer include -->
<?php include("footer.php");?>
    <!-- END! Footer include -->    
    <!-- END! Footer include -->  



    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>


</div><!--Wraps entire page -->
  </body>
</html>
