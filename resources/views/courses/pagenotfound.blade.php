<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/404_alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:23:03 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/favicon_1.ico">

       @include('courses.title')

        


        
        {!!Html::style('css/bootstrap.min.css')!!}
        {!!Html::style('css/bootstrap-reset.css')!!} 
        {!!Html::style('css/animate.css')!!}
        {!!Html::style('assets/font-awesome/css/font-awesome.css')!!} 
        {!!Html::style('assets/ionicon/css/ionicons.min.css')!!}
        {!!Html::style('css/style.css')!!}  
        {!!Html::style('css/helper.css')!!}
        

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62751496-1', 'auto');
  ga('send', 'pageview');

</script>

    </head>


    <body>

        <!-- Aside Start-->
        


        <!--Main Content Start -->
        <section class="">
            
            @include('courses.header')


            <!-- Page Content Start -->
            <!-- ================== -->

                <div class="wrapper-page">

                    <div class="ex-page-content text-center">
                        <h1>{{ Auth::user()->name }}</h1>
                        <h2 class="font-light">Sorry, You have <strong style="color: red; font-family: italic;">{{$points}}</strong> weighted cluster points </h2><br>
                        <p>System can't guide you. You better try next time:</p>
                       
                        <a class="btn btn-purple" href="{{ url('/home')}}"><i class="fa fa-angle-left"></i> Back to Home</a>
                    </div>
                    
                </div>


            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
           @include('courses.footer')
            <!-- Footer Ends -->



        </section>
      
        {!!Html::script('js/jquery.js')!!}
        {!!Html::script('js/bootstrap.min.js')!!}
        {!!Html::script('js/pace.min.js')!!}
        {!!Html::script('js/modernizr.min.js')!!}
        {!!Html::script('js/wow.min.js')!!}
        {!!Html::script('js/jquery.nicescroll.js')!!}
        {!!Html::script('js/jquery.app.js')!!}

    

    </body>

<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/404_alt.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:23:03 GMT -->
</html>
