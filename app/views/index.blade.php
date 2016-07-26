<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>MobiHealth Dashboard</title>
    <script src="http://code.angularjs.org/1.2.3/angular.js"></script>
    <script src="http://code.angularjs.org/1.2.3/angular-route.js"></script>
    <script src="./app.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-united.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
<style>
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(img/Preloader_10.gif) center no-repeat #fff;
}
    </style>
</head>

<body>
<div class="se-pre-con"></div>

    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""> <img alt="MobiHealth Logo" src="img/ic_launcher_main.png" class="hidden-xs"/>
                <span>MobiHealth</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
           
            <!-- theme selector ends -->

          

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href=""><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                                            
                        <li class="accordion"><a class="ajax-link" href="chart"><i class="glyphicon glyphicon-list-alt"></i><span> Charts</span></a>
                        <ul class="nav nav-pills nav-stacked">
                                    <li><a href="chart">Frequency of messages played</a></li>
                                   
                            </ul>
                        </li>
                        <li><a class="ajax-link" href="gallery"><i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a>
                        </li>
                        <li class="accordion"><a class="ajax-link" href="table"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Tables</span></a>
                                    <ul class="nav nav-pills nav-stacked">
                                    <li><a href="table">Messages</a></li>
                                    <li><a href="typeofmessages">Major Components Used</a></li>
                                     <li><a href="pregnancymessages">Pregnancy Messages</a></li>
                                     <li><a href="firstyearmessages">Baby's First Year Messages</a></li>
                                      <li><a href="typeofmessages">Youth Sexual Health</a></li>
                                       <li><a href="typeofmessages">Visual Aids</a></li>
                                        <li><a href="typeofmessages">Referral Alerts</a></li>
                            </ul></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Number of Volunteers</div>
            <div>21</div>
          
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Communities</div>
            <div>21</div>
        </a>
    </div>

   
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Introduction</h2>

              
            </div>
            <div class="box-content row">
                <div class="col-lg-12">
                    <h1>MobiHealth</h1>
                    <div class="pull-left" style="width:50%">
                    <p style="text-align:justify">MobiHealth is a project implemented by Grameen Foundation and funded by Indigo Trust which seeks to equip community-based volunteers with mobile devices which can be used as a means of diseminating information to various community members to improve health care delivery in the rural areas. Currently the project has been implemented in South Tongu District in the Volta Region in Ghana. Twenty one (21) volunteers have been equipped with mobile devices which comes with an android application known as the "MobiHealth Volunteer Application".</p>

                    <p><b>The application consists of five major modules which are described in detail below </b></p>
                    </div>
                    <img src="img/13.jpg" class="pull-right" style="width:450px; height:250px">

                    
                </div>
              

            </div>
        </div>
    </div>
</div>

<div class="row">
 
    <!--/span-->
<div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Pregnancy Messages</h2>
             
               
              
            </div>
            <div class="box-content">
                <div class="box-content">
                   <p><img class="dashboard-avatar" src="img/preg.png">This module provides audio messages that are pre-categories for easy identification by volunteers to play for pregnant women in the various trimesters. 
                </p>
                </div>
            </div>
        </div>
    </div>

        <!--/span-->
    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Baby's First Year Messages</h2>
             
               
              
            </div>
            <div class="box-content">
                <div class="box-content">
                   <p><img class="dashboard-avatar" src="img/baby.png">This module provides audio messages that are pre-categories for easy identification by volunteers to play for pregnant women in the various trimesters. 
                </p>
                </div>
            </div>
        </div>
    </div>
    <!--/span-->

    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Youth Sexual Health Messages</h2>

               
            </div>
             <div class="box-content">
                <div class="box-content">
                   <p><img class="dashboard-avatar" src="img/youth.png">This module provides audio messages that are pre-categorized for easy identification by volunteers to play messages on sexual reproductive health. 
                </p>
                </div>
            </div>
        </div>
    <!--/span-->
</div><!--/row-->

<div class="row">
    <div class="box col-md-4">
         <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Visual Aids</h2>

               
            </div>
             <div class="box-content">
                <div class="box-content">
                   <p><img class="dashboard-avatar" src="img/visual.png">This module provides visual aids in the form of videos and images. These are played and shown to community members to allow them further visualize.
                </p>
                </div>
            </div>
        </div>
    </div>
    <!--/span-->

   <div class="box col-md-4">
         <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Referral Alerts System</h2>

               
            </div>
             <div class="box-content">
                <div class="box-content">
                   <p><img class="dashboard-avatar" src="img/alert.PNG">This module allows volunteers to send pre-composed messages to community nurses based on conditions assessed by volunteers based on their visits.
                </p>
                </div>
            </div>
        </div>
    </div>
    <!--/span-->


    <!--/span-->
</div><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->



</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>

<script>
$(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>
</body>
</html>
