  <header class="top-head container-fluid">
                <ul class="list-inline navbar-right top-menu top-right-menu">  
                    <!-- mesages -->  
                   
                    <!-- /messages -->
                    <!-- Notification -->
                    
                    <!-- /Notification -->

                    <!-- user login dropdown start-->
                    <li class="dropdown text-center">
                        
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/schoo.jpg" class="img-circle profile-img thumb-sm">
                            <span class="username">{{ Auth::user()->name }} </span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                            
                            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out" ></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->       
                </ul>
                <!-- End right navbar -->

            </header>