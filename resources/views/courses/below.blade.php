<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://coderthemes.com/velonic_wb_3/admin/widgets.html by Cyotek WebCopy 1.3.0.405, Friday, February 2, 2018, 10:30:35 AM -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/favicon_1.ico">
            @include('courses.title')

        <!-- Google-Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>

        <link rel="stylesheet" type="text/css" href="assets/form-wizard/jquery.steps.css">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet">

        <!-- Plugins css -->
        <link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">


        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/helper.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62751496-1', 'auto');
  ga('send', 'pageview');

</script>

    </head>


    <body>

        <!-- Aside Start-->
 
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="">
            
            <!-- Header -->
           @include('courses.header')
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container">
                <div class="page-title"> 
                   <h3 style=" font-weight: bold;"class="title">STUDENT CAREER GUIDANCE SYSTEM</h3> 
                </div>


                <!-- WEATHER -->
               

                <!-- End row -->    

                <!-- Slider/ Carousel -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="panel panel-default text-center text-white slider-bg">
                            <div class="slider-overlay br-radius"></div>
                            <div class="panel-body p-0">
                                <div class="velonic-carousel">
                                    <div id="velonic-slider-2" class="owl-carousel">
                                        <div class="item">
                                            <h4 class="text-white"><b> WELCOME TO STUDENT CAREER GUIDANCE</b></h4>
                                            <p class="small">21 June, 2018</p>
                                            <p class="m-t-30"><em>Plan a perfect long term career. Your career choise will define your success in future. This site provide full categories of career courses you want to persue in academics. Get your favourite institution that suites your career.</em></p>
                                            <button class="btn btn-info btn-sm m-t-40">Let your career defines your success</button>
                                        </div><!-- /.item -->
<!-- /.item -->

                                      
                                    </div><!-- /#tiles-slide-2 -->
                                </div>
                            </div> <!-- panel-body -->
                        </div><!-- Panel -->
                    </div> <!-- col-->

                </div>  <!-- End row -->
               <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-color panel-primary">
                            <div class="panel-heading"> 
                                <h3 class="panel-title">Welcome..<b>{{ Auth::user()->name }}</b>!</h3> 
                            </div> 
                          
                            <div class="panel-body"> 
                                <div id="portlet2" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                       
                                   <div class="panel-body">
                                    <button type="button" class="btn btn-primary btn-rounded m-b-5">Programs You Belong</button>
                                      <div class="panel-body pull-right">
                                        <h4 style="color: lightblue; font-style: bold;"><strong>Your Cluster Points</strong></h4>
                                    <button type="button" class="btn btn-success btn-rounded m-b-5">{{$points}}</button>
                                    

                                
                                     </div>
                        
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Course Name</th>
                                                    <th>View course</th>
                                                    
                                                </tr>

                                            </thead>
                                            <tbody>
                                                 @foreach($courses as $course)
                                                <tr>

                                                    <td>{{$course->id}}</td>
                                                    <td>{{$course->course_name}}</td>
                                                    
                                                    <td><a href='{{url("program/$course->id")}}'><span class="label label-info">Released</span></a></td>
                                                    
                                                </tr>
                                             
                                                @endforeach
                                            </tbody>

                                            
                                        </table>
                                      
                                    </div>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
                <br>

            </div> <!-- END Wraper -->

            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
          @include('courses.footer')
            <!-- Footer Ends -->



        </section>
        <!-- Main Content Ends -->



    




        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/pace.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

        <!-- Counter-up -->
        <script src="js/waypoints.min.js" type="text/javascript"></script>
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>

        <!-- skycons -->
        <script src="js/skycons.min.js" type="text/javascript"></script>

        <!-- EASY PIE CHART JS -->
        <script src="assets/easypie-chart/easypiechart.min.js"></script>
        <script src="assets/easypie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/easypie-chart/example.js"></script>

        <!-- sparkline --> 
        <script src="assets/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/sparkline-chart/chart-sparkline.js" type="text/javascript"></script> 

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/jquery-knob/jquery.knob.js"></script>

        <!-- owl-carousel --> 
        <script src="assets/owl-carousel/owl.carousel.js"></script>
        
        <!--forms-wizard validation-->
        <script src="assets/form-wizard/bootstrap-validator.min.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="assets/form-wizard/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/jquery.validate/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="assets/form-wizard/wizard-init.js" type="text/javascript"></script>

        <!-- Custom Script -->
        <script src="js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                /* Counter Up */
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                //owl carousel
                $("#velonic-slider,#velonic-slider-2").owlCarousel({
                    navigation : true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    autoPlay:true
                });
            });
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };
        </script>

    
    </body>
<!-- Copied from http://coderthemes.com/velonic_wb_3/admin/widgets.html by Cyotek WebCopy 1.3.0.405, Friday, February 2, 2018, 10:30:35 AM -->
</html>
