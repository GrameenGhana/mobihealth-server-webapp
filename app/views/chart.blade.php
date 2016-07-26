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
    <title>Charts</title>
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
     
        <script src="js/Chart.min.js"></script>
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
 
    <link rel="shortcut icon" href="img/favicon.ico">

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
           <a class="navbar-brand" href=""> <img alt="Charisma Logo" src="img/ic_launcher_main.png" class="hidden-xs"/>
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
                    <li><a href="login">Logout</a></li>
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
            <a href="#">Charts</a>
        </li>
    </ul>
</div>

<div class="row">
 <script>
        (function() {
            $( document ).ready(function() {
             
            var ctx = document.getElementById('canvas').getContext('2d');
           

            var chart = {
                labels: [@foreach($types as $type){{ json_encode($type->sub_module)}}{{","}}@endforeach],
                datasets: [{
                    data: [@foreach($types as $type){{ json_encode($type->c)}}{{","}}@endforeach],
                    fillColor : getRandomColor(),
                    strokeColor : "#bb574e",
                    pointColor : "#bb574e"
                }]
            };
        
            new Chart(ctx).Bar(chart, { bezierCurve: false });
           
              });
        })
           ();
  
function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
    </script>

    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list-alt"></i> Chart with points</h2>
               
            </div>
            <div class="box-content">
               <div style="width: 100%">
            <canvas id="canvas" height="700" width="1100"></canvas>
        </div>
                
            </div>
        </div>
    </div>
    

<div class="row">
 <script>
        (function() {
            $( document ).ready(function() {
             var pieData = [
                {
                    value: [@foreach($types as $type){{ json_encode($type->c)}}{{","}}@endforeach],
                    color: "#4D5360",
                    highlight: "#616774",
                    label: [@foreach($types as $type){{ json_encode($type->sub_module)}}{{","}}@endforeach]
                }

            ];
            var ctx = document.getElementById('pie_canvas').getContext('2d');
           

            var chart = {
                labels: [@foreach($types as $type){{ json_encode($type->sub_module)}}{{","}}@endforeach],
                datasets: [{
                    data: [@foreach($types as $type){{ json_encode($type->c)}}{{","}}@endforeach],
                    fillColor : getRandomColor(),
                    strokeColor : "#bb574e",
                    pointColor : "#bb574e"
                }]
            };
            new Chart(ctx).Pie(pieData, { bezierCurve: false });
           
              });
        })
           ();
  function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

    </script>

    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-list-alt"></i> Chart with points</h2>
               
            </div>
            <div class="box-content">
               <div style="width: 100%">
            <canvas id="pie_canvas" height="700" width="1100"></canvas>
        </div>
                
            </div>
        </div>
    </div>
    
</div><!--/row-->


<!-- chart libraries start -->
<script src="bower_components/flot/excanvas.min.js"></script>
<script src="bower_components/flot/jquery.flot.js"></script>
<script src="bower_components/flot/jquery.flot.pie.js"></script>
<script src="bower_components/flot/jquery.flot.stack.js"></script>
<script src="bower_components/flot/jquery.flot.resize.js"></script>
<!-- chart libraries end -->
<script src="js/init-chart.js"></script>

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


</body>
</html>
