 


<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>What We Do | The Ronald W. Reagan Society of Eureka College</title>
    <!-- <title>Welcome to the Ronald W. Reagan Society of Eureka College</title> -->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="../bower_components/modernizr/modernizr.js"></script>
    <script src="//use.typekit.net/rfb2fjs.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
  </head>
  <body>

   <header>
 <a href="index.html"></a>
 <!-- <div id="head-wrapper"> -->
  <div id="ec-logo-wrapper">
   <div class="small-centered medium-uncentered columns">
    <a href="http://www.eureka.edu"><img src="img/ec-logo-full.png" alt="Eureka College" id="ec-logo" title="Visit www.eureka.edu"></a>
     <!--<object type="image/svg+xml" data="../img/shield-rgb.png" width="100" height="100"></object>-->
   </div>
  </div>
 <!-- </div> -->
<div class="contain-to-grid">

  <div class="row">
    <div class="small-6 small-centered text-center medium-uncentered medium-4 columns">
      <a href="/" id="logo"><img src="img/RRS-logo-web-banner.png" alt="Ronald W. Reagan Society of Eureka College" title="Ronald W. Reagan Society of Eureka College"></a>
    </div>
    <div class="small-centered text-center medium-uncentered medium-4 right columns primary-buttons">
        <a href="become-a-member.html" class="button radius" role="button">Become a member</a>
        <!--<h4 class="pull-3" style="text-align: right; margin-top: -1em;"><a href="#" class="" role=""><small>Member login</small></a></h4>-->
    </div><!-- end buttons -->
  </div>

</div> <!-- end contain-to-grid -->

<div class="contain-to-grid">
  <nav class="top-bar" data-topbar role="navigation">
   <ul class="title-area">
     <li class="name"></li>
     <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
   </ul>

   <section class="top-bar-section">
     <ul class="navbar">
       <li><a href="who-we-are.html">Who we are</a></li>
       <li><a href="what-we-do.html">What we do</a></li>
       <li><a href="https://www.eureka.edu/reagan/reagan-legacy/">Reagan's Story</a></li>
       <li><a href="visit-reagans-campus.html">Visit Reagan's Campus</a></li>
       <li><a href="ways-to-give.html">Ways to Give</a></li>
       <li><a href="#" data-reveal-id="contactModal">Contact</a></li>
     </ul>

<div id="contactModal" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h3 id="modalTitle">Contact us</h3>
  <p class="lead">For more information on the Ronald W. Reagan Society of Eureka College, please email <a href="mailto:reagan@eureka.edu">reagan@eureka.edu</a> or call 309-467-6477.</p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
   </section>
  </nav>
</div><!-- end top-bar navigation -->
</header>

<!-- <a href="#">Contact</a> -->
<?php
if($_POST["message"]) {
    mail("web@eureka.edu", "Form to email message", $_POST["message"], "From: [senderEmail]");
}
?>
   <div class="row">


        <div class="large-9 columns">

          <h3>Get in Touch!</h3>
          <p>We invite those who share the <em>ReaganForward</em> vision to join us as we advance and build on the leadership legacy of Ronald W. Reagan&hellip;at Eureka College. Sign up below to join our online email and enewsletter list.</p>

          <div class="section-container tabs" data-section>
            <section class="section">
              <h5 class="title">Sign up for the Reagan Society emails</h5>
              <div class="content" data-slug="panel1">
                <form action="" method="post">
                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="right">Your Name</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="text" id="yourName" name="your_name" placeholder="Ronald Reagan">
                    </div>
                  </div>
                  <div class="row collapse">
                  <div class="large-2 columns"><label class="right"> Business/organization (if applicable)</label>
                 </div>
                  <div class="large-10 columns">
                    <input type="text" id="business" placeholder="Eureka College">
                  </div>
                  </div>

                  <div class="row collapse">           
                  <div class="large-2 columns">
                  <label class="right"> Title</label>
                 </div>
                  <div class="large-10 columns">
                    <input type="text" id="title" placeholder="">
                  </div>
                  </div>

                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="right"> Email</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="email" id="senderEmail" placeholder="rreagan@eureka.edu">
                    </div>
                  </div>

                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="right"> Phone</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="tel" id="Phone" placeholder="309-123-4567">
                    </div>
                   </div>

                   <div class="row collapse">
                    <div class="large-2 columns">
                     <label> Street Address</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="text" id="streetAddress">
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-4 columns">
                      <div class="small-12 columns">
                      <label>City<input type="text" id="city"></label>
                      </div>
                    </div>
                    <div class="large-4 columns">
                      <div class="small-6 columns">
                        <label>State<select type="dropdown" id="state" name="state">
                          <option value="AL">Alabama</option>
                          <option value="AK">Alaska</option>
                          <option value="AZ">Arizona</option>
                          <option value="AR">Arkansas</option>
                          <option value="CA">California</option>
                          <option value="CO">Colorado</option>
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="DC">District of Columbia</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="HI">Hawaii</option>
                          <option value="ID">Idaho</option>
                          <option value="IL">Illinois</option>
                          <option value="IN">Indiana</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="ME">Maine</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NV">Nevada</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NM">New Mexico</option>
                          <option value="NY">New York</option>
                          <option value="NC">North Carolina</option>
                          <option value="ND">North Dakota</option>
                          <option value="OH">Ohio</option>
                          <option value="OK">Oklahoma</option>
                          <option value="OR">Oregon</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SC">South Carolina</option>
                          <option value="SD">South Dakota</option>
                          <option value="TN">Tennessee</option>
                          <option value="TX">Texas</option>
                          <option value="UT">Utah</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WA">Washington</option>
                          <option value="WV">West Virginia</option>
                          <option value="WI">Wisconsin</option>
                          <option value="WY">Wyoming</option>
                        </select>
                        </label>
                      </div>
                    </div>
                    <div class="large-4 columns">
                      <div class="small-6 columns">
                        <label>Zip Code<input type="text"></label>
                      </div>  
                    </div>
                  </div>

                  </div>
                  </div>
                  <button type="submit" class="radius button">Submit</button>
                </form>
              </div>
            </section>
          </div>
        </div>

        <div class="large-3 columns">
          <h5>Map</h5>

          <p>
            <a href="" data-reveal-id="mapModal"><img src="http://placehold.it/400x280"></a><br/>
            <a href="" data-reveal-id="mapModal">View Map</a>
          </p>
          <p>
            123 Awesome St.<br/>
            Barsoom, MA 95155
          </p>
        </div>

      </div>

      <footer class="row">
        <div class="large-12 columns">
          <hr/>
          <div class="row">
            <div class="large-6 columns">
              <p>© Copyright no one at all. Go to town.</p>
            </div>
            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

      <div class="reveal-modal" id="mapModal">
        <h4>Where We Are</h4>
        <p><img src="http://placehold.it/800x600"/></p>


        <a href="#" class="close-reveal-modal">×</a>
      </div>

<!-- Footer -->
<footer id="footer">
  <div class="row">
    <div class="small-10 medium-6 small-centered medium-uncentered columns">
      <a href="/" class="" id=""><img src="img/RRS-logo-web-banner.png" alt="Ronald W. Reagan Society of Eureka College" title="Ronald W. Reagan Society of Eureka College"></a>
      <p>The Ronald W. Reagan Society of Eureka College aims to be a national beacon for American opportunity and a living legacy to the values we instilled in Ronald W. Reagan. </p>
    </div>
   <div class="">
    <div class="small-6 medium-3 columns">
      <ul class="footer-links">
       <li><a href="become-a-member.html">Become a member</a></li>
       <li><a href="who-we-are.html">Who we are</a></li>
       <li><a href="what-we-do.html">What we do</a></li>
       <li><a href="https://www.eureka.edu/reagan/reagan-legacy/">Reagan's Story</a></li>
       <li><a href="visit-reagans-campus.html">Visit Reagan's Campus</a></li>
       <li><a href="ways-to-give.html">Ways to Give</a></li>
       <li><a href="#" data-reveal-id="contactModal">Contact</a></li>
     </ul>

      <div id="contactModal" class="reveal-modal small" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <h3 id="modalTitle">Contact us</h3>
        <p class="lead">For more information on the Ronald W. Reagan Society of Eureka College, please email <a href="mailto:reagan@eureka.edu">reagan@eureka.edu</a> or call 309-467-6477.</p>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
      </div>

    </div>
    <div class="small-6 medium-3 columns end">
       <ul class="footer-links">
         <li><a href="https://www.eureka.edu/reagan/reagan-leadership-program/">Leadership Program</a></li>
         <li><a href="https://www.eureka.edu/library/shenkman-center/">Shenkman Research Center</a></li>
         <li><a href="https://www.eureka.edu/reagan/museum/">Museum</a></li>
         <li><a href="https://www.eureka.edu/reagan/garden/">Peace Garden</a></li>
       </ul>
    </div>
   </div>
  </div>

  <div class="row">
    <div class="small-12 medium-6 columns">
      <p>&copy; 2015 Ronald W. Reagan Society of Eureka College | <a href="#">Privacy Policy</a></p>
    </div>
    <div class="small-12 medium-6 columns">
      <ul class="footer-links social">
       <li><a href="#"><i class="fa fa-twitter" align="absmiddle"></i> Twitter</a></li>
       <li><a href="#"><i class="fa fa-facebook" align="absmiddle" /></i> Facebook</a></li>
      <li><a href="#"><i class="fa fa-envelope-o" align="absmiddle"></i> Email</a></li>
    </div>
  </div>
</footer>

    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/stickyfooter.js"></script>

  </body>
</html>
