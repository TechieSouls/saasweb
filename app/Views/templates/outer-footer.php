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
                    <div><a href="main">Why TEAM</a></div>
                    <div><a href="#">Features</a></div>
                    <div><a href="#">Pricing</a></div>
                    <div><a href="#">Request Demo</a></div>
                    <div><a id="myBtn" href="#">FQA</a></div>
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

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span><div class="row text-center mt-5 justify-content-center p-3">
        <div class="col-lg-10 col-md-10 col-sm-12 wow animate__fadeInUp" data-wow-duration="2s">
            <h3 class="mb-4 text-center text-28 f-26">Frequently Asked Questions</h3>
        </div>

        <div class="col-md-6 col-sm-10 wow animate__slideInLeft" data-wow-duration="2s">
                <div class="text-left">
                    <span class="heading"> 1. What are the survey link?</span>
                    <p class="mb-4"><a href="www.hrasiamedia.com/awards/team." target="_blank">www.hrasiamedia.com/awards/team.</a></p>

                    
                    <span class="heading">2. What is the deadline of completing the survey?</span>
                    <p class="mb-4">You are suggested to complete the survey within two weeks once you have received the survey login codes from the organiser. Once the survey are completed, you will be notified by the Organizer. </p>
                    

                    <span class="heading">3. How can I know the progress of my company in completing the survey?</span>
                    <p class="mb-4">You can log-on to your account to see the latest updates about the  progress. Due to the confidentiality of the process, you will only know the number of respondents submitted or haven’t submitted the survey by the survey code number. </p>
                    

                    <span class="heading">4. How do I remind my respondents to complete the survey?</span>
                    <p class="mb-4"> Due to annonymity of the survey, you are unable to find the pending email addresses. You can go to the Dashboard, click the button to the survey code who has not submitted the survey.</p>
                

                    <span class="heading">5. Is there any paper survey instead of online survey for my company to complete? </span>
                    <p class="mb-4"> The survey are only available online. No paper surveys will be accepted. </p>
                

                    <span class="heading">6. What language are the Surveys in?</span>
                    <p class="mb-4">......</p>
                </div>
        </div>
        <div class="col-md-4 wow animate__slideInRight" data-wow-duration="2s">
            <img src="<?php echo base_url(); ?>/public/assets/images/faq-block.png" />
        </div>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
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
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
	</body>

</html>