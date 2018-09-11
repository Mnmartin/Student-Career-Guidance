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

          {!!Html::style('assets/form-wizard/jquery.steps.css')!!}
        <!-- Bootstrap core CSS -->
       
        {!!Html::style('css/bootstrap.min.css')!!}
      
        {!!Html::style('css/bootstrap-reset.css')!!}

        <!--Animation css-->
        
        {!!Html::style('css/animate.css')!!}
        
        {!!Html::style('assets/notifications/notification.css')!!}
        <!--Icon-fonts css-->
      
        {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}
        
        {!!Html::style('assets/ionicon/css/ionicons.min.css')!!}
        <!-- Plugins css -->
        
        {!!Html::style('assets/owl-carousel/owl.carousel.css')!!}

        <!-- Custom styles for this template -->
       
        {!!Html::style('css/style.css')!!}
        
        {!!Html::style('css/helper.css')!!}
       
        {!!Html::style('css/style-responsive.css')!!}

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
           @include('courses.header1')
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container">
               <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">STUDENT CAREER GUIDANCE</h4> </div>
                    


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
                    
                    <!-- Left sidebar -->
                    <div class="col-sm-3">
                    </div>
                    <!-- Left sidebar -->
                    
                    <!-- Right sidebar -->
                    <div class="col-sm-12">
                        
                        <!-- Message -->
                        <div class="panel panel-default m-t-20">
                            <div class="panel-heading"> 
                                <h3 class="panel-title">Program View</h3> 
                            </div>
                            <div class="panel-body">

                                <div class="media m-b-30 ">

                                    <a href="#" class="pull-left">
                                        <img alt="" src="/img/seb.jpg" class="media-object thumb-sm">
                                    </a>
                                    <div class="media-body">
                                       
                                        <span class="media-meta pull-right">07:23 AM</span>
                                           @foreach($course_groups as $course)
                                        <h4 class="text-primary m-0">Career Name</h4>
                                        <small class="text-muted">{{$course->course_name}}</small>
                                       
                                    </div>
                                </div> <!-- media -->

                                <p><b>Career Description...</b></p>
                                <p>This is a career that gives you good opportunity to be creative and innovative in the current technology for better competetive in the business fields. I t has all the infromation that raises your visions in the future. <td><a href="javascript:;" onclick="$.Notification.autoHideNotify('warning','top center','Career Subjects', '{{$course->subject_name}}.')"><span class="label label-info autohidebut" data-toggle="tooltip" data-placement="left" title="Click to view subjects"> subjects</span></a></td></p>
                                 <p><b>Career Significance...</b></p>
                                <p>Its a wonderfull career that give the full knowlegde on how to be an entrepreneur in the economy of today, which needs the creative minds for better utilization of the resourses. .</p>
                                 <p><b>Career Application Areas...</b></p>
                                <p>The main applicabable areas where this career can be utilised includes: Organizations, companies, institutions and government parastals.</p>

                                <hr/>


                                        <div class="media-body">
                                       
                                        <a class="btn btn-info autohidebut btn-rounded m-b-5" href="javascript:;" onclick="$.Notification.autoHideNotify('warning','bottom left','Universities offering the career', '<li>{{$course->university_name}}</li>.')">See Universities</a>
                                         @endforeach
                                    </div> 
                                                            
                            </div> <!-- panel-body -->
                        </div> <!-- End panel -->
                        <!-- End message -->

                        <!-- Replay -->
                        
                        <!-- Replay -->

                    </div> <!-- Col-->
                
                </div>
            
                    
              

            </div> <!-- END Wraper -->

            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
          @include('courses.footer')
            <!-- Footer Ends -->



        </section>
        <!-- Main Content Ends -->



    




        <!-- js placed at the end of the document so the pages load faster -->
   
        {!!Html::script('js/jquery.js')!!}
      
         {!!Html::script('js/bootstrap.min.js')!!}
        
         {!!Html::script('js/pace.min.js')!!}
        
         {!!Html::script('js/wow.min.js')!!}
        
         {!!Html::script('js/jquery.nicescroll.js')!!}

        <!-- Counter-up -->
       
         {!!Html::script('js/waypoints.min.js')!!}
      
          {!!Html::script('js/jquery.counterup.min.js')!!}
        <!-- skycons -->
        
         {!!Html::script('js/skycons.min.js')!!}
        <!-- EASY PIE CHART JS -->
       
         {!!Html::script('assets/easypie-chart/easypiechart.min.js')!!}
       
         {!!Html::script('assets/easypie-chart/jquery.easypiechart.min.js')!!}
        
         {!!Html::script('assets/easypie-chart/example.js')!!}
        <!-- sparkline --> 
        
         {!!Html::script('assets/sparkline-chart/jquery.sparkline.min.js')!!}
      
         {!!Html::script('assets/sparkline-chart/chart-sparkline.js')!!} 

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/jquery-knob/excanvas.js"></script>
        <![endif]-->
    
         {!!Html::script('assets/jquery-knob/jquery.knob.js')!!} 
          <!-- owl-carousel --> 
        
         {!!Html::script('assets/owl-carousel/owl.carousel.js')!!} 
        <!--forms-wizard validation-->
        
        {!!Html::script('assets/form-wizard/bootstrap-validator.min.js')!!} 
        <!--Form Wizard-->
       
         {!!Html::script('assets/form-wizard/jquery.steps.min.js')!!} 
       
         {!!Html::script('assets/jquery.validate/jquery.validate.min.js')!!} 

        <!--wizard initialization-->
      
        {!!Html::script('assets/form-wizard/wizard-init.js')!!} 

        <!-- Custom Script -->
     
        {!!Html::script('js/jquery.app.js')!!} 
         
        {!!Html::script('assets/notifications/notify.min.js')!!} 
     
         {!!Html::script('assets/notifications/notify-metro.js')!!} 
        
         {!!Html::script('assets/notifications/notifications.js')!!} 


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
