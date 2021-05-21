<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/public/assets/css/themes/lite-blue.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/public/assets/css/custom.css?t=<?= time(); ?>" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/public/assets/css/main.css?t=<?= time(); ?>" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/public/assets/css/plugins/jquery.flipster.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/public/assets/css/plugins/animate.min.css" rel="stylesheet" />

</head>
<body>
            <div class="w-100 justify-content-center user-profile bg-transparent">
            <div class="head">

                <div class="header-cover" style="height:100% !important;">
                <?php if (strpos(base_url(uri_string()), 'contactus') == false)  { ?>
                    <div class="header-cover-bg"></div>
                 <?php  } ?>

                    <div class="row">
                        <div class="col-md-12">    
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand mr-5 ml-3" href="main"><img src="<?php echo base_url(); ?>/public/assets/images/logo.png" class="logo"/></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                        <div class="navbar-toggler-icon">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </button>
                                    <div class="collapse navbar-collapse justify-content-center text-right" id="navbarNavAltMarkup">
                                        <div class="navbar-nav mr-5 mb-mrgn-right-3">
                                            <a class="nav-item nav-link text-primary text-16" href="main">Why T.E.A.M?</a>
                                            <a class="nav-item nav-link text-primary text-16" href="#">Features</a>
                                            <a class="nav-item nav-link text-primary text-16" href="#">Pricing</a>
                                            <a class="nav-item nav-link text-primary text-16" href="#">Learning Hub</a>
                                            <a class="nav-item nav-link text-primary text-16" href="contactus">Contact Us</a>
                                        </div>
                                
                                    </div>
                                    <a  href="https://dev.cenesgroup.com/saas-dev/index.php/saas/login" class="mr-4 ml-4 btn btn-outline-primary pl-5 pr-5 text-primary text-18 border-primary f-14 thick-border" type="button">Login</a>
                            </nav>
    
                            <!--div class="text-right mt-5 mb-mrgn-top-0">
                                    <a  href="https://dev.cenesgroup.com/saas-dev/index.php/saas/login" class="mr-4 btn btn-outline-primary pl-5 pr-5 text-white text-18 border-white f-14" type="button">Login</a>
                            </div-->
                    </div>
                    <?php if (strpos(base_url(uri_string()), 'contactus') == false)  { ?>
                        <div class="row ml-4 mt-5 banner-container pr-5 ">
                            <div class="col-lg-6 col-md-6 col-sm-12 text-primary mb-2">
                                <div class="wow animate__fadeInDown" data-wow-duration="2s">
        
                                <h1 class="text-primary text-44 mb-4 f-30">Employee Precision</h1>
                                <div class="text-18 mb-5 f-14" style="
    max-width: 500px;">Harness deep insights what matters to people at work.
                                    Create a faster and sustainable company performance.</div>
                                    <button class="btn bg-color-397DD6 pl-5 pr-5 pt-3 pb-3 text-white text-17 mr-3 f-14 mobile-btn" style="background-color: #285ea7 !important; 
    font-weight: 700;" type="button">Join Survey</button>
                                    <!-- <button class="btn btn-outline-primary pl-5 pr-5 pt-3 pb-3 text-primary text-17 border-primary f-14 thick-border mobile-btn" type="button">Learn How</button> -->
        
                                </div>
                            </div>
                            <!--div class="col-md-1">&nbsp;</div-->
                            <div class="col-lg-6 col-md-6 col-sm-12 text-right">
                                <img class="imgzoomanim dashboardbannerimg" src="<?php echo base_url(); ?>/public/assets/images/dashboard.png" class="img-fluid" />
                            </div>
                        </div> <!-- row -->
                    <?php  } ?>

    
                </div>
            </div>
        </div>
    

   