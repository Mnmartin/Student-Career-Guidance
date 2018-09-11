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
       {!!Html::style('assets/modal-effect/css/component.css')!!}
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
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"><button type="button" class="btn btn-primary pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal">Help</a>
                    </div>
                    <!-- /.col-lg-12 -->
               
               
                 <div class="row">
                    
                      
                          
                            <div class="panel-body pull-right"> 
                                <!-- sample modal content -->

                                <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog" style="width:55%;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                             
                                                <h3 class="modal-title text-center" id="custom-width-modalLabel"><strong>Get Assistance</strong></h3>
                                            </div>
                                            <div class="modal-body">
                                                <h4 class="text-center"><i><strong>Kindly go throught the guidline below!</i></strong>.</h4>
                                                <ul>
                                    <li>Language subjects are provided with aesterick means..in all fields are required
                                        <ul>
                                            <li>Mathematics</li>
                                            <li>English</li>
                                            <li>Kiswahili</li>
                                            
                                        </ul>
                                    </li>
                                    <li>On sciences, Chemistry is a mandatory. Others are optional, you either choose one or both
                                     <ul>
                                            <li>Chemistry</li>
                                            <li>Biology</li>
                                            <li>Physics</li>
                                            
                                        </ul></li>
                                        <br>
                                  <p><span class="dropcap text-danger">NOTE</span>When you choose Biology and Physics, pick two subjects from the rest. Or if you choose either Physics or Biology, pick three subjects from the rest. Or if you decide to leave both Biology and Physics, choose four subject only from the rest...
                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <!-- Custom width modal -->
                               
                                <!-- Full width modal -->
                               

                            </div>
                        
                   
                </div>
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
                                           
                                            <button class="btn btn-primary btn-sm m-t-40">Let your career defines your success</button>
                                        </div><!-- /.item -->
<!-- /.item -->

                                      
                                    </div><!-- /#tiles-slide-2 -->
                                </div>
                            </div> <!-- panel-body -->
                        </div><!-- Panel -->
                    </div> <!-- col-->

                </div>  <!-- End row -->
               @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                       <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-color panel-primary">
                            <div class="panel-heading"> 
                                <h3 class="panel-title">SUBJECTS EVALUATION</h3> 
                            </div> 
                                
                            <div class="panel-body"> 
                                 <form action="{{url('submitdetails')}}" method="post" id="form">
                                    @csrf
                                <div id="wizard-vertical">
                                    <h3>LANGUAGES</h3>
                                    <section>
                                        <div class="form">
                                            <label class="col-lg-2 control-label " for="userName1">MATHEMATICS*</label>
                                            <div class="col-lg-4">
                                                <select class="form-control required" id="userName1" name="mathematics" type="text">
                                                    <option value="">Select maths grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">C+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="password1"> ENGLISH *</label>
                                            <div class="col-lg-4">
                                                <select class="form-control required" id="userName1" name="english" type="text">
                                                    <option value="">Select english grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">C+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="confirm1">KISWAHILI *</label>
                                            <div class="col-lg-4">
                                               <select class="form-control required" id="userName1" name="kiswahili" type="text">
                                                    <option value="">Select kiswahili grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">C+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-4 control-label ">(*) Mandatory</label>
                                        </div>
                                    </section>
                                    <h3>SCIENCES</h3>
                                    <section>
                                        <div class="form">

                                            <label class="col-lg-2 control-label" for="name1"> BIOLOGY </label>
                                            <div class="col-lg-4">
                                                <select id="name1" name="biology" type="text" class="required form-control">
                                                    <option value="">Select biology grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="surname1">PHYSICS </label>
                                            <div class="col-lg-4">
                                                <select id="surname1" name="physics" type="text" class="required form-control">
                                                    <option value="">Select physics grade</option>
                                                   <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="email1">CHEMISTRY *</label>
                                            <div class="col-lg-4">
                                                <select id="email1" name="chemistry" type="text" class="required email form-control">
                                                    <option value="">Select chemistry grade</option>
                                                   <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                            <br>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                        </div>

                                    </section>
                                    <h3>HUMANITIES</h3>
                                    <section>
                                        <div class="form">

                                            <label class="col-lg-2 control-label" for="name1"> GEOGRAPHY</label>
                                            <div class="col-lg-4">
                                                <select id="name1" name="geography" type="text" class="required form-control">
                                                    <option value="">Select geography grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="surname1"> HISTORY</label>
                                            <div class="col-lg-4">
                                                <select id="surname1" name="history" type="text" class="required form-control">
                                                    <option value="">Select history grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>

                                            </div>
                                        </div>
                                            <br>
                                        <div class="form">
                                            <label class="col-lg-2 control-label " for="email1">RELIGION</label>
                                            <div class="col-lg-4">
                                                <select id="email1" name="cre" type="text" class="required email form-control">
                                                    <option value="">Select religion grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="address1">ISLAMIC</label>
                                            <div class="col-lg-4">
                                                <select id="address1" name="islam" type="text" class="form-control">
                                                    <option value="">Select islamic grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                       <div class="form">
                                            <label class="col-lg-2 control-label " for="email1">HINDUS</label>
                                            <div class="col-lg-4">
                                                <select id="email1" name="hindu" type="text" class="required email form-control">
                                                    <option value="">Select hindus grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        

                                    </section>
                                    <h3>TECHNICALS</h3>
                                    <section>
                                        <div class="form">

                                            <label class="col-lg-2 control-label" for="name1"> BUSINESS</label>
                                            <div class="col-lg-4">
                                                <select id="name1" name="business" type="text" class="required form-control">
                                                    <option value="">Select business grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="surname1"> ARICULTURE</label>
                                            <div class="col-lg-4">
                                                <select id="surname1" name="agriculture" type="text" class="required form-control">
                                                    <option value="">Select agriculture grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>

                                            </div>
                                        </div>
                                            <br>
                                        <div class="form">
                                            <label class="col-lg-2 control-label " for="email1">MUSIC</label>
                                            <div class="col-lg-4">
                                                <select id="email1" name="music" type="text" class="required email form-control">
                                                    <option value="">Select music grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="address1">FRENCH</label>
                                            <div class="col-lg-4">
                                                <select id="address1" name="french" type="text" class="form-control">
                                                    <option value="">Select french grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                       <div class="form">
                                            <label class="col-lg-2 control-label " for="email1">GERMANY</label>
                                            <div class="col-lg-4">
                                                <select id="email1" name="germany" type="text" class="required email form-control">
                                                    <option value="">Select germany grade</option>
                                                   <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="email1">ARABIC</label>
                                            <div class="col-lg-4">
                                                <select id="email1" name="arabic" type="text" class="required email form-control">
                                                    <option value="">Select arabic grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>AVIATION SUBJECTS</h3>
                                      <section>
                                        
                                        <div class="form">

                                            <label class="col-lg-2 control-label" for="name1">COMP STUDIES</label>
                                            <div class="col-lg-4">
                                                <select id="name1" name="computer" type="text" class="required form-control">
                                                    <option value="">Select computer grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="surname1"> ELECTRIC</label>
                                            <div class="col-lg-4">
                                                <select id="surname1" name="electric" type="text" class="required form-control">
                                                    <option value="">Select electricity grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>

                                            </div>
                                        </div>
                                            <br>
                                        <div class="form">
                                            <label class="col-lg-2 control-label " for="email1">METAL WORK</label>
                                            <div class="col-lg-4">
                                                <select id="email1" name="work" type="text" class="required email form-control">
                                                    <option value="">Select metal work grade</option>
                                                   <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="address1">WOODWORK</label>
                                            <div class="col-lg-4">
                                                <select id="address1" name="wood" type="text" class="form-control">
                                                    <option value="">Select woodwork grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                       <div class="form">
                                            <label class="col-lg-2 control-label " for="email1">ART AND DESIGN</label>
                                            <div class="col-lg-4">
                                                <select id="email1" name="art" type="text" class="required email form-control">
                                                    <option value="">Select art and design grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="email1">POWER MECHANICS</label>
                                            <div class="col-lg-4">
                                                <select id="email1" name="mechanic" type="text" class="required email form-control">
                                                    <option value="">Select mechanic grade</option>
                                                    <option value="12">A</option>
                                                    <option value="11">A-</option>
                                                    <option value="10">B+</option>
                                                    <option value="9">B</option>
                                                    <option value="8">B-</option>
                                                    <option value="7">c+</option>
                                                    <option value="6">C</option>
                                                    <option value="5">C-</option>
                                                    <option value="4">D+</option>
                                                    <option value="3">D</option>
                                                    <option value="2-">D-</option>
                                                    <option value="1">E</option>
                                                </select>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>Finish</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12">
                                                <label class="cr-styled">

                                                    <input type="checkbox" required="required">
                                                    <i class="fa"></i> 
                                                    I agree with the Terms and Conditions.
                                                </label>
                                             
                                            </div>
                                        </div>
                                      <div class="form-group pull-center">
                                         <div class="col-lg-12">
                                     <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                  </div>
                                 </section>
                                </div> 
                              
                            </form>
                            </div>  <!-- End panel-body -->
                        </div> <!-- End panel -->

                    </div> <!-- end col -->

                </div> <!-- End row -->

                       

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
         {!!Html::script('assets/modal-effect/js/classie.js')!!}
         {!!Html::script('assets/modal-effect/js/modalEffects.js')!!}
        {!!Html::script('js/jquery.app.js')!!}

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
