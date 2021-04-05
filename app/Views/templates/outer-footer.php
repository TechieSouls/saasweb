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
                    <div class="text-11"><a href="#">Quick Links</a></div>
                    <div><a href="main">Why TEAM</a></div>
                    <div><a href="#">Feature</a></div>
                    <div><a href="#">Pricing</a></div>
                    <div><a href="#">Request Demo</a></div>
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

	</body>
</html>