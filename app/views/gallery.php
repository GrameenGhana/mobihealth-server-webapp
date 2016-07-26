<!DOCTYPE html>
<html lang="en">
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
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

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
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <a class="navbar-brand" href="index.html"> <img alt="Mobihealth Logo" src="img/ic_launcher_main.png" class="hidden-xs"/>
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
                        <li><a class="ajax-link" href="index"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
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
                <a href="#">Gallery</a>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-picture"></i> Gallery</h2>

                    <div class="box-icon">
                        <a href="#" class="btn btn-setting btn-round btn-default"><i
                                class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                class="glyphicon glyphicon-chevron-up"></i></a>
                        <a href="#" class="btn btn-close btn-round btn-default"><i
                                class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <br>
                    <ul class="thumbnails gallery">
                                                    <li id="image-1" class="thumbnail">
                                <a style="img/1.jpg)"
                                   title="Sample Image 1" href="img/1.jpg"><img
                                        class="grayscale" src="img/1.jpg"
                                        alt="Sample Image 1"></a>
                            </li>
                                                    <li id="image-2" class="thumbnail">
                                <a style="img/2.jpg)"
                                   title="Sample Image 2" href="img/2.jpg"><img
                                        class="grayscale" src="img/2.jpg"
                                        alt="Sample Image 2"></a>
                            </li>
                                                    <li id="image-3" class="thumbnail">
                                <a style="img/3.jpg)"
                                   title="Sample Image 3" href="img/3.jpg"><img
                                        class="grayscale" src="img/3.jpg"
                                        alt="Sample Image 3"></a>
                            </li>
                                                    <li id="image-4" class="thumbnail">
                                <a style="img/4.jpg)"
                                   title="Sample Image 4" href="img/4.jpg"><img
                                        class="grayscale" src="img/4.jpg"
                                        alt="Sample Image 4"></a>
                            </li>
                                                    <li id="image-5" class="thumbnail">
                                <a style="img/5.jpg)"
                                   title="Sample Image 5" href="img/5.jpg"><img
                                        class="grayscale" src="img/5.jpg"
                                        alt="Sample Image 5"></a>
                            </li>
                                                    <li id="image-6" class="thumbnail">
                                <a style="img/6.jpg)"
                                   title="Sample Image 6" href="img/6.jpg"><img
                                        class="grayscale" src="img/6.jpg"
                                        alt="Sample Image 6"></a>
                            </li>
                                                    <li id="image-7" class="thumbnail">
                                <a style="img/7.jpg)"
                                   title="Sample Image 7" href="img/7.jpg"><img
                                        class="grayscale" src="img/7.jpg"
                                        alt="Sample Image 7"></a>
                            </li>
                                                    <li id="image-8" class="thumbnail">
                                <a style="img/8.jpg)"
                                   title="Sample Image 8" href="img/8.jpg"><img
                                        class="grayscale" src="img/8.jpg"
                                        alt="Sample Image 8"></a>
                            </li>
                                                    <li id="image-9" class="thumbnail">
                                <a style="img/9.jpg)"
                                   title="Sample Image 9" href="img/9.jpg"><img
                                        class="grayscale" src="img/9.jpg"
                                        alt="Sample Image 9"></a>
                            </li>
                                                    <li id="image-10" class="thumbnail">
                                <a style="img/10.jpg)"
                                   title="Sample Image 10" href="img/10.jpg"><img
                                        class="grayscale" src="img/10.jpg"
                                        alt="Sample Image 10"></a>
                            </li>
                                                    <li id="image-11" class="thumbnail">
                                <a style="img/11.jpg)"
                                   title="Sample Image 11" href="img/11.jpg"><img
                                        class="grayscale" src="img/11.jpg"
                                        alt="Sample Image 11"></a>
                            </li>
                                                    <li id="image-12" class="thumbnail">
                                <a style="img/12.jpg)"
                                   title="Sample Image 12" href="img/12.jpg"><img
                                        class="grayscale" src="img/12.jpg"
                                        alt="Sample Image 12"></a>
                            </li>
                                                    <li id="image-13" class="thumbnail">
                                <a style="img/13.jpg)"
                                   title="Sample Image 13" href="img/13.jpg"><img
                                        class="grayscale" src="img/13.jpg"
                                        alt="Sample Image 13"></a>
                            </li>
                                                    <li id="image-14" class="thumbnail">
                                <a style="img/14.jpg)"
                                   title="Sample Image 14" href="img/14.jpg"><img
                                        class="grayscale" src="img/14.jpg"
                                        alt="Sample Image 14"></a>
                            </li>
                                                    <li id="image-15" class="thumbnail">
                                <a style="img/15.jpg)"
                                   title="Sample Image 15" href="img/15.jpg"><img
                                        class="grayscale" src="img/15.jpg"
                                        alt="Sample Image 15"></a>
                            </li>
                                                    <li id="image-16" class="thumbnail">
                                <a style="img/16.jpg)"
                                   title="Sample Image 16" href="img/16.jpg"><img
                                        class="grayscale" src="img/16.jpg"
                                        alt="Sample Image 16"></a>
                            </li>
                                                    <li id="image-17" class="thumbnail">
                                <a style="img/17.jpg)"
                                   title="Sample Image 17" href="img/17.jpg"><img
                                        class="grayscale" src="img/17.jpg"
                                        alt="Sample Image 17"></a>
                            </li>
                                                    <li id="image-18" class="thumbnail">
                                <a style="img/18.jpg)"
                                   title="Sample Image 18" href="img/18.jpg"><img
                                        class="grayscale" src="img/18.jpg"
                                        alt="Sample Image 18"></a>
                            </li>
                                                    <li id="image-19" class="thumbnail">
                                <a style="img/19.jpg)"
                                   title="Sample Image 19" href="img/19.jpg"><img
                                        class="grayscale" src="img/19.jpg"
                                        alt="Sample Image 19"></a>
                            </li>
                                                    <li id="image-20" class="thumbnail">
                                <a style="img/20.jpg)"
                                   title="Sample Image 20" href="img/20.jpg"><img
                                        class="grayscale" src="img/20.jpg"
                                        alt="Sample Image 20"></a>
                            </li>
                                                    <li id="image-21" class="thumbnail">
                                <a style="img/21.jpg)"
                                   title="Sample Image 21" href="img/21.jpg"><img
                                        class="grayscale" src="img/21.jpg"
                                        alt="Sample Image 21"></a>
                            </li>
                                                    <li id="image-22" class="thumbnail">
                                <a style="img/22.jpg)"
                                   title="Sample Image 22" href="img/22.jpg"><img
                                        class="grayscale" src="img/22.jpg"
                                        alt="Sample Image 22"></a>
                            </li>
                                                    <li id="image-23" class="thumbnail">
                                <a style="img/23.jpg)"
                                   title="Sample Image 23" href="img/23.jpg"><img
                                        class="grayscale" src="img/23.jpg"
                                        alt="Sample Image 23"></a>
                            </li>
                                                    <li id="image-24" class="thumbnail">
                                <a style="img/24.jpg)"
                                   title="Sample Image 24" href="img/24.jpg"><img
                                        class="grayscale" src="img/24.jpg"
                                        alt="Sample Image 24"></a>
                            </li>
                                            </ul>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad, you can remove it -->
       <!-- Ad ends -->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    

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
