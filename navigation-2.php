    


    <div class="nav-wrapper2  hide-for-small"> <!-- big nav -->
      <div class="row">
        <div class="large-12 columns nav-logo">
          <div class="large-5 medium-5 columns">
            <div class="logo-container">
              <a href="index.php"><span class="logo-box"><span class="a">Z</span> <span class="h">C</span></span> <span class="logo-title">Zomcure</span></a>
            </div>
          </div>
          <div class="large-7 medium-7 columns">
            <ul class="inline float-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="my-services.php">Services</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div><!-- links -->
        </div>
      </div> 
    </div><!-- END BIG nav-wrapper -->

<div class="row hide-for-big mobile-menu2">
  <div class="large-12 columns">
    <div class="">
        <nav id="mobile-menu"><!-- hamburger nav -->
          <section id="navbar-toggler">
            <div id="hamburger-holder" class="condensed">
              <span class="hamburger-bar"></span>
              <span class="hamburger-bar"></span>
              <span class="hamburger-bar"></span>menu
            </div>
            <div id="menu-text-section" class="condensed">
            </div>
            <div style="clear: both"></div>
          </section>

          <section id="menu-items">
            <a href="index.php"><div>Home</div></a>
            <a href="about.php"><div>About</div></a>
            <a href="my-services.php"><div>Services</div></a>
            <a href="contact.php"><div>Contact</div></a>
          </section>
        </nav>
        </style>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
          <script>

          $("#menu-text-section, #hamburger-holder").click(function(){
            $("#menu-items").toggleClass("showing");
          });

        </script>
    </div>
  </div> <!-- large-12 -->  
</div> <!-- .row -->
        <!-- End Hamburger Nav -->