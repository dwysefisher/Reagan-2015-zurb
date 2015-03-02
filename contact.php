
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to the Ronald W. Reagan Society of Eureka College</title>
    <link rel="stylesheet" href="css/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
    <script src="//use.typekit.net/rfb2fjs.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
  </head>
  <body>

   <header>
 <a href="index.html"></a>
 <div id="head-wrapper">
  <div class="ec-logo-wrapper">
   <div class="ec-logo">
    <a href="http://www.eureka.edu"><img src="../img/shield-rgb.png" alt="Eureka College logo" title="Visit www.eureka.edu"></a>
     <!--<object type="image/svg+xml" data="../img/shield-rgb.png" width="100" height="100"></object>-->
   </div>
  </div>
 </div>

<div class="contain-to-grid">

  <div class="row">
    <div class="large-2 columns">
      <h1 class="logo"><a href="#">Ronald W. Reagan Society of Eureka College</a></h1>
    </div>
    <div class="">
      <ul class="right button-group">
        <li a href="" class="button">Give today</li>
        <li class="divider"></li>
        <li a href="" class="button">Sign up</li>
      </ul>
    </div><!-- end button-group -->
  </div>
</div> <!-- end contain-to-grid -->

<!-- <div class="row"> -->

  <nav class="top-bar" data-topbar role="navigation">
   <ul class="title-area">
     <li class="name"></li>
     <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
   </ul>

   <section class="top-bar-section">
     <ul>
       <li><a href="#">Who we are</a></li>
       <li class="divider"></li>
       <li><a href="#">What we do</a></li>
       <li class="divider"></li>
       <li><a href="#">Visit campus</a></li>
       <li class="divider"></li>
       <li><a href="#">Events Calendar</a></li>
       <li class="divider"></li>
       <li><a href="#">Eureka College</a></li>
       <li class="divider"></li>
       <li><a href="#">Contact</a></li>
     </ul>
   </section>
  </nav>
<!-- </div> --> <!-- end top-bar navigation -->
</header>
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

<footer>
 <div class="row">
   <div class="centered columns">
    <p>&copy; Ronald W. Reagan Society of Eureka College</p>
   </div>
 </div>
</footer>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
