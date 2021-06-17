<!--/div--> <!-- row user-profile -->


    <script src="<?php echo base_url(); ?>/public/assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/plugins/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/scripts/script.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/plugins/echarts.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/scripts/echart.options.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/plugins/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/scripts/dashboard.v4.script.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/scripts/widgets-statistics.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/plugins/apexcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/scripts/apexSparklineChart.script.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/scripts/customizer.script.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/plugins/jquery.flipster.min.js"></script>

    <script>
        $(function(){
            new WOW().init(); 
        });

        $(window).on('load', function(){
            new WOW().init(); 
        });

    </script>


    <script>
        var flat = $("#flat").flipster({
            style: 'flat',
            spacing: -0.25,
            nav: false,
            buttons: true,
            loop:true,
            scrollwheel:false
        });
</script>
    <div class="row text-center justify-content-center" id="shape-footer">
        <div class="col-md-10">
            <h3 class="mb-5 text-center text-28 f-26 mt-5 wow animate__slideInUp" data-wow-duration="4s">Want to explore more?</h3>
            <a href="#" type="button" class="btn btm-primary bg-color-397DD6 footer-getstarted text-white text-right text-18 f-14 p-3 mb-5 wow animate__fadeInUp" data-wow-duration="3s">Get Started&nbsp;&nbsp;&nbsp; 

                <img src="<?php echo base_url(); ?>/public/assets/images/white-right-arrow.png"/>
            </a>
            <div class="row mt-5 text-left text-15 p-3"  data-wow-duration="3s">
                <div class="col-md-3  col-sm-12 text-11">
                    <p>Asia’s most professional HR analytic service to gain deep insights into  what drives engagement in your organization . </p>
                </div>
                <div class="col-md-9 col-sm-11 hvr-efft text-15 text-color-3D5154 justify-content-end ul-widget-app__small-title wow animate__slideInLeft">
                    <div class="text-11">Quick Links</div>
                    <div><a id="myBtny2" style="cursor: pointer;" >Why TEAM</a></div>
                    <div><a class="smooth" href="#features">Features</a></div>
                    <div><a class="smooth" href="#pricing">Pricing</a></div>
                    <div><a href="#">Request Demo</a></div>
                    <div><a id="myBtn" href="#">FAQ</a></div>
                    <div><a href="contactus">Contact Us</a></div>
                </div>

            </div>
        </div>
       
        <div class="col-md-10 border-top"></div>
        <!--div class="row border-top"-->
            <div class="col-md-5 col-sm-11 text-11 text-left p-4">© Copyright Business Media International <?= date('Y'); ?>. All Rights Reserved.</div>
            <div class="col-md-5 col-sm-11 text-right p-4 text-left-m">
                <a class="tw-link" href="#">
                    <img src="<?php echo base_url(); ?>/public/assets/images/twitter-inactive.png" />
                    <img  class="tw-img-top" src="<?php echo base_url(); ?>/public/assets/images/twitter-active.png" />
                </a>
                <a class="fb-link" href="#">
                    <img src="<?php echo base_url(); ?>/public/assets/images/facebook-inactive.png" />
                    <img  class="fb-img-top" src="<?php echo base_url(); ?>/public/assets/images/facebook-active.png" />
                </a>

                <a class="yt-link" href="#">
                    <img src="<?php echo base_url(); ?>/public/assets/images/youtube-inactive.png" />
                    <img  class="yt-img-top" src="<?php echo base_url(); ?>/public/assets/images/youtube-active.png" />
                </a>

                </div>
        <!--/div-->
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10 border-top"></div>
    </div>

<!-- The FQA Modal -->
<div id="myModal" class="modal" style="background-color: #fffE; padding-top: 50px; padding-bottom: 50px; overflow-y: scroll; overflow-x: hidden;">

  <!-- Modal content -->
  <div class="modal-content" style="
    width: 75%;
    margin: auto;
    justify-content: center;
    align-items: baseline;
    border: none;
    padding: 12px;
    box-shadow: -1px 10px 43px -4px rgba(0,0,0,0.19);
    -webkit-box-shadow: -1px 10px 43px -4px rgba(0,0,0,0.19);
    -moz-box-shadow: -1px 10px 43px -4px rgba(0,0,0,0.19);
">
    <span class="close" style="
    max-height: 32px!important;
    width: 100%;
    padding: 0px;
    margin: 0px;
    line-height: 0.6;
    text-align: right;
    float: right;
    font-size: 30px;
    ">×</span><div class="row text-center mt-5 justify-content-center p-3" style="
">
        <div class="col-lg-10 col-md-10 col-sm-12 wow animated animated" style="visibility: visible;">
        <!-- <div class="col-lg-10 col-md-10 col-sm-12 wow animate__fadeInUp" data-wow-duration="2s"> -->
            <h3 class="mb-4 text-center text-28 f-26">Frequently Asked Questions</h3>
        </div>

        <div class="col-md-6 col-sm-10 wow animated animated" style="visibility: visible;">
        <!-- <div class="col-md-6 col-sm-10 wow animate__slideInLeft" data-wow-duration="2s"> -->
                <div class="text-left">
                    <span class="heading"> 1. What is the survey link?</span>
                    <p class="mb-4">You will receive a dedicated survey link from an email sent by your company.</p>

                    
                    <span class="heading">2. What is the deadline for completing the survey?</span>
                    <p class="mb-4">You are suggested to complete the survey within two weeks once you have received the survey login codes from the organizer. Survey links are expired quarterly. </p>
                    

                    <span class="heading">3. How can I know the progress of my company in completing the survey?</span>
                    <p class="mb-4">You can log in to your account to see the latest updates about the progress. Due to the confidentiality of the process, you will only know the number of respondents who submitted or haven’t submitted the survey by the survey code number. </p>
                    

                    <span class="heading">4. How do I remind my respondents to complete the survey?</span>
                    <p class="mb-4"> Due to the anonymity of the survey, you are unable to find the pending email addresses. You can go to the Dashboard, click the Send Reminder button to the survey code who has not submitted the survey.</p>
                

                    <span class="heading">5. Is there any paper survey instead of the online survey for my company to complete? </span>
                    <p class="mb-4"> The survey is only available online. No paper surveys will be accepted. </p>
                

                    <span class="heading">6. What languages are the Surveys in?</span>
                    <p class="mb-4">The languages (English, Chinese, Vietnamese, Korean, Bahasa Malaysia, Thailand) are supported</p>
                </div>
        </div>
        <div class="col-md-4 wow animated animated" style="visibility: visible; display: flex; align-items: center;">
        <!-- <div class="col-md-4 wow animate__slideInRight" data-wow-duration="2s"> -->
            <img src="http://teamhr.org/public/assets/images/faq-block.png">
        </div>
    </div>
  </div>

</div>

<!-- The WHY TEAM Modal -->
<div id="myModaly" class="modal"  style="background-color: #fffE; padding-top: 50px; padding-bottom: 50px; overflow-y: scroll; overflow-x: hidden;">

  <!-- Modal content -->
  <div class="modal-content" style="
    width: 75%;
    margin: auto;
    justify-content: center;
    align-items: baseline;
    border: none;
    padding: 12px;
    box-shadow: -1px 10px 43px -4px rgba(0,0,0,0.19);
    -webkit-box-shadow: -1px 10px 43px -4px rgba(0,0,0,0.19);
    -moz-box-shadow: -1px 10px 43px -4px rgba(0,0,0,0.19);">
    <span class="closey" style=" 
    max-height: 32px!important;
    width: 100%;
    padding: 0px;
    margin: 0px;
    line-height: 0.6;
    text-align: right;
    float: right;
    font-size: 30px;">&times;</span><div class="row text-center mt-5 justify-content-center p-3">
        <div class="col-lg-10 col-md-10 col-sm-12 wow">
        <!-- <div class="col-lg-10 col-md-10 col-sm-12 wow animate__fadeInUp" data-wow-duration="2s"> -->
            <h3 class="mb-4 text-center text-28 f-26">Why T.E.A.M</h3>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-10 wow" style="margin-top: 20px;font-size: large;">
        <!-- <div class="col-lg-4 col-md-6 col-sm-10 wow animate__slideInLeft" style="margin-top: 20px;font-size: large;" data-wow-duration="2s"> -->
                <div class="text-left">
                    <!-- <span class="heading"> 1. What are the survey link?</span> -->
                    <p class="mb-4">T.E.A.M establishes the levels of engagement within your organisation and identifies strategies and initiatives to enhance employee wellbeing, motivation and productivity.
</p>

                </div>
        </div>
        <div class="col-md-4 wow offset-1">
        <!-- <div class="col-md-4 wow offset-1 animate__slideInRight" data-wow-duration="2s"> -->
            <img src="<?php echo base_url(); ?>/public/assets/images/winners.png" />
        </div>
<div class="col-lg-10 col-md-10 col-sm-12 wow">
<!-- <div class="col-lg-10 col-md-10 col-sm-12 wow animate__fadeInUp" data-wow-duration="2s"> -->
            
        </div>
        <div class="col-lg-4 col-md-6 col-sm-10 wow">
        <!-- <div class="col-lg-4 col-md-6 col-sm-10 wow animate__slideInLeft" data-wow-duration="2s"> -->
                <div class="text-left">
                    <!-- <span class="heading"> 1. What are the survey link?</span> -->
                    <img src="<?php echo base_url(); ?>/public/assets/images/analysis.png" />

                </div>
        </div>
        <div class="col-md-4 offset-1 wow" style="margin-top: 39px;size: large; text-align: left;">
        <!-- <div class="col-md-4 offset-1 wow animate__slideInRight" data-wow-duration="2s" style="margin-top: 39px;size: large; text-align: left;"> -->
            <p class="mb-4">The T.E.A.M questionnaires are a combination of 35 analytical questions and free-text response options that can rapidly pinpoint the issues that contribute to underperformance and keep performers focused.
</p>
        </div>
    </div>
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get FQA the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});


</script>

<!-- why team modal -->
   <script>
// Get the modal
var modaly = document.getElementById("myModaly");

// Get why team the button that opens the modal
var btny = document.getElementById("myBtny");
// Get why team the button that opens the modal
var btny2 = document.getElementById("myBtny2");

// Get the <span> element that closes the modal
var spany = document.getElementsByClassName("closey")[0];

// When the user clicks the button, open the modal 
btny.onclick = function() {
  modaly.style.display = "block";
}
// When the user clicks the button, open the modal 
btny2.onclick = function() {
  modaly.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spany.onclick = function() {
  modaly.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modaly) {
    modaly.style.display = "none";
  }
}


</script>

<!-- Smooth scrolling code -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".smooth").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
	</body>

</html>