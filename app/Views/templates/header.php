<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />	
	<link href="<?php echo base_url(); ?>/public/assets/css/themes/lite-blue.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>/public/assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/public/assets/css/custom.css?t=<?= time(); ?>" rel="stylesheet" />


	
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
            <div class="logo">
                <img src="<?php echo base_url(); ?>/public/assets/images/logo.png" alt="">
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- User avatar dropdown -->
            </div>
        </div>
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item" data-item="dashboard"><a class="nav-item-hold" href="dashboard"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text">Dashboard</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="uikits"><a class="nav-item-hold" href="teamSurvey"><i class="nav-icon i-Library"></i><span class="nav-text">T.E.A.M Survey</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="extrakits"><a class="nav-item-hold" href="#"><i class="nav-icon i-Suitcase"></i><span class="nav-text">Rewards</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="apps"><a class="nav-item-hold" href="faq"><i class="nav-icon i-Computer-Secure"></i><span class="nav-text">Support</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="widgets"><a class="nav-item-hold" href="javascript:void(0);" data-toggle="modal" data-target="#exampleModalCenter"><i class="nav-icon i-Computer-Secure"></i><span class="nav-text">Logout</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="charts" style="display:none;"><a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Charts</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="forms" style="display:none;"><a class="nav-item-hold" href="#"><i class="nav-icon i-File-Clipboard-File--Text"></i><span class="nav-text">Forms</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" style="display:none;"><a class="nav-item-hold" href="datatables.html"><i class="nav-icon i-File-Horizontal-Text"></i><span class="nav-text">Datatables</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="sessions" style="display:none;"><a class="nav-item-hold" href="#"><i class="nav-icon i-Administrator"></i><span class="nav-text">Sessions</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item active" data-item="others" style="display:none;"><a class="nav-item-hold" href="#"><i class="nav-icon i-Double-Tap"></i><span class="nav-text">Others</span></a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" style="display:none;"><a class="nav-item-hold" href="http://demos.ui-lib.com/gull-html-doc/" target="_blank"><i class="nav-icon i-Safe-Box1"></i><span class="nav-text">Doc</span></a>
                        <div class="triangle"></div>
                    </li>
                </ul>
            </div>
            <div class="sidebar-left-secondary-bkup rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true" style="display:none;">
                <!-- Submenu Dashboards-->
                <ul class="childNav" data-parent="forms">
                    <li class="nav-item"><a href="form.basic.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Basic Elements</span></a></li>
                    <li class="nav-item"><a href="form.layouts.html"><i class="nav-icon i-Split-Vertical"></i><span class="item-name">Form Layouts</span></a></li>
                    <li class="nav-item"><a href="form.input.group.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Input Groups</span></a></li>
                    <li class="nav-item"><a href="form.validation.html"><i class="nav-icon i-Close-Window"></i><span class="item-name">Form Validation</span></a></li>
                    <li class="nav-item"><a href="smart.wizard.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Smart Wizard</span></a></li>
                    <li class="nav-item"><a href="tag.input.html"><i class="nav-icon i-Tag-2"></i><span class="item-name">Tag Input</span></a></li>
                    <li class="nav-item"><a href="editor.html"><i class="nav-icon i-Pen-2"></i><span class="item-name">Rich Editor</span></a></li>
                </ul>
                <ul class="childNav" data-parent="apps">
                    <li class="nav-item"><a href="invoice.html"><i class="nav-icon i-Add-File"></i><span class="item-name">Invoice</span></a></li>
                    <li class="nav-item"><a href="inbox.html"><i class="nav-icon i-Email"></i><span class="item-name">Inbox</span></a></li>
                    <li class="nav-item"><a href="chat.html"><i class="nav-icon i-Speach-Bubble-3"></i><span class="item-name">Chat</span></a></li>
                </ul>
                <ul class="childNav" data-parent="widgets">
                    <li class="nav-item"><a href="widget-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget card</span></a></li>
                    <li class="nav-item"><a href="widget-statistics.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget statistics</span></a></li>
                    <li class="nav-item"><a href="widget-list.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget List <span class="ml-2 badge badge-pill badge-danger">New</span></span></a></li>
                    <li class="nav-item"><a href="widget-app.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget App <span class="ml-2 badge badge-pill badge-danger"> New</span></span></a></li>
                    <li class="nav-item"><a href="weather-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Weather App <span class="ml-2 badge badge-pill badge-danger"> New</span></span></a></li>
                </ul>
                <!-- chartjs-->
                <ul class="childNav" data-parent="charts">
                    <li class="nav-item"><a href="charts.echarts.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">echarts</span></a></li>
                    <li class="nav-item"><a href="charts.chartsjs.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">ChartJs</span></a></li>
                    <li class="nav-item dropdown-sidemenu"><a href=""><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Apex Charts</span><i class="dd-arrow i-Arrow-Down"></i></a>
                        <ul class="submenu">
                            <li><a href="charts.apexAreaCharts.html">Area Charts</a></li>
                            <li><a href="charts.apexBarCharts.html">Bar Charts</a></li>
                            <li><a href="charts.apexBubbleCharts.html">Bubble Charts</a></li>
                            <li><a href="charts.apexColumnCharts.html">Column Charts</a></li>
                            <li><a href="charts.apexCandleStickCharts.html">CandleStick Charts</a></li>
                            <li><a href="charts.apexLineCharts.html">Line Charts</a></li>
                            <li><a href="charts.apexMixCharts.html">Mix Charts</a></li>
                            <li><a href="charts.apexPieDonutCharts.html">PieDonut Charts</a></li>
                            <li><a href="charts.apexRadarCharts.html">Radar Charts</a></li>
                            <li><a href="charts.apexRadialBarCharts.html">RadialBar Charts</a></li>
                            <li><a href="charts.apexScatterCharts.html">Scatter Charts</a></li>
                            <li><a href="charts.apexSparklineCharts.html">Sparkline Charts</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="childNav" data-parent="extrakits">
                    <li class="nav-item"><a href="image.cropper.html"><i class="nav-icon i-Crop-2"></i><span class="item-name">Image Cropper</span></a></li>
                    <li class="nav-item"><a href="loaders.html"><i class="nav-icon i-Loading-3"></i><span class="item-name">Loaders</span></a></li>
                    <li class="nav-item"><a href="ladda.button.html"><i class="nav-icon i-Loading-2"></i><span class="item-name">Ladda Buttons</span></a></li>
                    <li class="nav-item"><a href="toastr.html"><i class="nav-icon i-Bell"></i><span class="item-name">Toastr</span></a></li>
                    <li class="nav-item"><a href="sweet.alerts.html"><i class="nav-icon i-Approved-Window"></i><span class="item-name">Sweet Alerts</span></a></li>
                    <li class="nav-item"><a href="tour.html"><i class="nav-icon i-Plane"></i><span class="item-name">User Tour</span></a></li>
                    <li class="nav-item"><a href="upload.html"><i class="nav-icon i-Data-Upload"></i><span class="item-name">Upload</span></a></li>
                </ul>
                <ul class="childNav" data-parent="uikits">
                    <li class="nav-item"><a href="alerts.html"><i class="nav-icon i-Bell1"></i><span class="item-name">Alerts</span></a></li>
                    <li class="nav-item"><a href="accordion.html"><i class="nav-icon i-Split-Horizontal-2-Window"></i><span class="item-name">Accordion</span></a></li>
                    <li class="nav-item"><a href="badges.html"><i class="nav-icon i-Medal-2"></i><span class="item-name">Badges</span></a></li>
                    <li class="nav-item"><a href="buttons.html"><i class="nav-icon i-Cursor-Click"></i><span class="item-name">Buttons</span></a></li>
                    <li class="nav-item"><a href="cards.html"><i class="nav-icon i-Line-Chart-2"></i><span class="item-name">Cards</span></a></li>
                    <li class="nav-item"><a href="card.metrics.html"><i class="nav-icon i-ID-Card"></i><span class="item-name">Card Metrics</span></a></li>
                    <li class="nav-item"><a href="carousel.html"><i class="nav-icon i-Video-Photographer"></i><span class="item-name">Carousels</span></a></li>
                    <li class="nav-item"><a href="lists.html"><i class="nav-icon i-Belt-3"></i><span class="item-name">Lists</span></a></li>
                    <li class="nav-item"><a href="pagination.html"><i class="nav-icon i-Arrow-Next"></i><span class="item-name">Paginations</span></a></li>
                    <li class="nav-item"><a href="popover.html"><i class="nav-icon i-Speach-Bubble-2"></i><span class="item-name">Popover</span></a></li>
                    <li class="nav-item"><a href="progressbar.html"><i class="nav-icon i-Loading"></i><span class="item-name">Progressbar</span></a></li>
                    <li class="nav-item"><a href="tables.html"><i class="nav-icon i-File-Horizontal-Text"></i><span class="item-name">Tables</span></a></li>
                    <li class="nav-item"><a href="tabs.html"><i class="nav-icon i-New-Tab"></i><span class="item-name">Tabs</span></a></li>
                    <li class="nav-item"><a href="tooltip.html"><i class="nav-icon i-Speach-Bubble-8"></i><span class="item-name">Tooltip</span></a></li>
                    <li class="nav-item"><a href="modals.html"><i class="nav-icon i-Duplicate-Window"></i><span class="item-name">Modals</span></a></li>
                    <li class="nav-item"><a href="nouislider.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Sliders</span></a></li>
                </ul>
                <ul class="childNav" data-parent="sessions">
                    <li class="nav-item"><a href="../sessions/signin.html"><i class="nav-icon i-Checked-User"></i><span class="item-name">Sign in</span></a></li>
                    <li class="nav-item"><a href="../sessions/signup.html"><i class="nav-icon i-Add-User"></i><span class="item-name">Sign up</span></a></li>
                    <li class="nav-item"><a href="../sessions/forgot.html"><i class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                </ul>
                <ul class="childNav" data-parent="others">
                    <li class="nav-item"><a href="../sessions/not-found.html"><i class="nav-icon i-Error-404-Window"></i><span class="item-name">Not Found</span></a></li>
                    <li class="nav-item"><a href="user.profile.html"><i class="nav-icon i-Male"></i><span class="item-name">User Profile</span></a></li>
                    <li class="nav-item"><a class="open" href="blank.html"><i class="nav-icon i-File-Horizontal"></i><span class="item-name">Blank Page</span></a></li>
                </ul>
            </div>
            <div class="sidebar-overlay"></div>
        </div>
        <!-- =============== Left side End ================-->