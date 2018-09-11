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
         {!!Html::style('css/bootstrap.min.css')!!}
         {!!Html::style('css/bootstrap-reset.css')!!}
         {!!Html::style('css/animate.css')!!}
         {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}
         {!!Html::style('assets/ionicon/css/ionicons.min.css')!!}
         {!!Html::style('assets/owl-carousel/owl.carousel.css')!!}
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
           @include('courses.header')
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

                </div> 

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
                                                    <th>Program Name</th>
                                                    <th>View program</th>
                                                    
                                                </tr>

                                            </thead>
                                            <tbody>
                                                 @foreach($course_groups as $group)
                                                <tr>

                                                    <td>{{$group->id}}</td>
                                                    <td>{{$group->course_name}}</td>
                                                    
                                                    <td><a href='{{url("program/$group->id")}}'><span class="label label-info">View</span></a></td>
                                                    
                                                </tr>
                                             
                                                @endforeach
                                            </tbody>

                                            
                                        </table>
                                      
                                    </div>
                                </div>
                            </div>
                            </div>

                        </div>
                        <div class="panel panel-color panel-primary">
                            <div class="panel-heading"> 
                                <h3 class="panel-title"></b>Programs Below your Cluster  points!</h3> 
                            </div> 
                          
                            <div class="panel-body"> 
                                <div id="portlet2" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                       
                                   <div class="panel-body">
                                      
                        
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Program Name</th>
                                                    <th>View program</th>
                                                    
                                                </tr>

                                            </thead>
                                            <tbody>

                                                 @foreach($courses as $course)
                                                <tr>

                                                    <td>{{$course->id}}</td>
                                                    <td>{{$course->course_name}}</td>
                                                    
                                                    <td><a href='{{url("program/$course->id")}}'><span class="label label-info">View</span></a></td>
                                                    
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
        {!!Html::script('js/bootstrap.min.js')!!}
        {!!Html::script('js/pace.min.js')!!}
        {!!Html::script('js/wow.min.js')!!}
        {!!Html::script('js/jquery.nicescroll.js')!!}
        {!!Html::script('js/waypoints.min.js')!!}
        {!!Html::script('js/jquery.counterup.min.js')!!}
        {!!Html::script('js/skycons.min.js')!!}
        {!!Html::script('assets/easypie-chart/easypiechart.min.js')!!}
        {!!Html::script('assets/easypie-chart/jquery.easypiechart.min.js')!!}
        {!!Html::script('assets/easypie-chart/example.js')!!}
        {!!Html::script('assets/sparkline-chart/jquery.sparkline.min.js')!!}
        {!!Html::script('assets/sparkline-chart/chart-sparkline.js')!!}
        {!!Html::script('assets/jquery-knob/jquery.knob.js')!!}
        {!!Html::script('assets/owl-carousel/owl.carousel.js')!!}
        {!!Html::script('assets/form-wizard/bootstrap-validator.min.js')!!}
        {!!Html::script('assets/form-wizard/jquery.steps.min.js')!!}
        {!!Html::script('assets/jquery.validate/jquery.validate.min.js')!!}
        {!!Html::script('assets/form-wizard/wizard-init.js')!!}
        {!!Html::script('js/jquery.app.js')!!}
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
