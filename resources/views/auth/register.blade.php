<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:23:03 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/favicon_1.ico">

       @include('courses.title')

        


        <!-- Bootstrap core CSS -->
        {!!Html::style('css/bootstrap.min.css')!!}
   
         {!!Html::style('css/bootstrap-reset.css')!!}
        <!--Animation css-->
        
          {!!Html::style('css/animate.css')!!}
        <!--Icon-fonts css-->
      
         {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}
        
         {!!Html::style('assets/ionicon/css/ionicons.min.css')!!}
        <!--Morris Chart CSS -->
       
         {!!Html::style('assets/morris/morris.css')!!}

        <!-- Custom styles for this template -->
      
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

        <div class="wrapper-page animated fadeInDown">
            <div class="panel panel-color panel-primary">
                <div class="panel-heading"> 
                   <h3 class="text-center m-t-10"> Create a new Account </h3>
                </div> 

                <form class="form-horizontal m-t-40" action="{{ route('register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required="" placeholder="Email" name="email">
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control " type="text" required="" placeholder="Username" name="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control " type="password" required="" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control " type="password" required="" placeholder="Confirm Password" name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label class="cr-styled">
                                <input type="checkbox" checked>
                                <i class="fa"></i> 
                                 I accept <strong><a href="#">Terms and Conditions</a></strong>
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group text-right">
                        <div class="col-xs-12">
                            <button class="btn btn-info w-md" type="submit">Register</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-center">
                            <a href="{{ route('login')}}">Already have account?</a>
                        </div>
                    </div>
                </form>                                  
                
            </div>
        </div>

        


        <!-- js placed at the end of the document so the pages load faster -->
        {!!Html::script('js/jquery.js')!!}
        
        {!!Html::script('js/bootstrap.min.js')!!}
       
        {!!Html::script('js/pace.min.js')!!}
     
        {!!Html::script('js/wow.min.js')!!}
      
        {!!Html::script('js/jquery.nicescroll.js')!!}
            

        <!--common script for all pages-->
        
        {!!Html::script('js/jquery.app.js')!!}

    
    </body>

<!-- Mirrored from coderthemes.com/velonic_3.0/admin_2/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2018 10:23:03 GMT -->
</html>
