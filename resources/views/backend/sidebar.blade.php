<div class="leftbar-tab-menu" >
    <div class="main-icon-menu slimscroll-menu" style="background-color:rgb(0, 146, 114)">
        <a href="{{url('/')}}" class="logo logo-metrica d-block text-center">
            <span>
                <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span>
        </a>
        <nav class="nav">
            <a href="#MetricaDashboard" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Dashboard">
                <i data-feather="home" class="align-self-center menu-icon icon-dual"></i>
            </a><!--end MetricaDashboards--> 

            <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Apps">
                <i data-feather="grid" class="align-self-center menu-icon icon-dual"></i>
            </a><!--end MetricaApps-->

            <a href="#MetricaUikit" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="UI Kit">
                <i data-feather="package" class="align-self-center menu-icon icon-dual"></i>
            </a><!--end MetricaUikit-->

            <a href="#MetricaPages" class="nav-link" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Pages">
                <i data-feather="copy" class="align-self-center menu-icon icon-dual"></i>             
            </a><!--end MetricaPages-->
<!--end MetricaAuthentication--> 

        </nav><!--end nav-->
        <div class="pro-metrica-end">
            <a href="" class="help" data-toggle="tooltip-custom" data-placement="right"  data-trigger="hover" title="" data-original-title="Chat">
                <i data-feather="message-circle" class="align-self-center menu-icon icon-md icon-dual mb-4"></i> 
            </a>
            <a href="" class="profile">
                <img src="assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle thumb-sm"> 
            </a>
        </div>
    </div><!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <span>
                    <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-body slimscroll">                    
             <div id="MetricaDashboard" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Dashboard</h6>       
                </div>
                <ul class="nav metismenu">     
                    <li class="nav-item"></li>                           
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="w-100">Staff</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="">All Staff Members</a></li>
                            <li><a type="button" data-toggle="modal" data-target="#exampleModal" href="">Add Staff</a></li>
                            <li><a href="ui-avatar.html">Disabled Members</a></li>
                        </ul>            
                    </li>
                </ul>
                {{-- <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="index.html">Customers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/create-staff')}}">Staff</a></li>
                    <li class="nav-item"><a class="nav-link" href="{}">Pending Approval</a></li>
                </ul> --}}
            </div><!-- end Dashboards -->                

            <!-- end Crypto -->
            
            <div id="MetricaUikit" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">UI Kit</h6>      
                </div>
                <ul class="nav metismenu">                                
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="w-100">UI Elements</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="ui-bootstrap.html">Bootstrap</a></li>
                            <li><a href="ui-animation.html">Animation</a></li>
                            <li><a href="ui-avatar.html">Avatar</a></li>
                            <li><a href="ui-clipboard.html">Clip Board</a></li>
                            <li><a href="ui-files.html">File Manager</a></li>
                            <li><a href="ui-ribbons.html">Ribbons</a></li>
                            <li><a href="ui-dragula.html">Dragula</a></li>
                            <li><a href="ui-check-radio.html">Check & Radio</a></li>
                        </ul>            
                    </li>
                </ul><!--end nav-->
            </div><!-- end Others -->

            <div id="MetricaPages" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Pages</h6>        
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="pages-profile.html">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-tour.html">Tour</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-timeline.html">Timeline</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-treeview.html">Treeview</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-starter.html">Starter Page</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-pricing.html">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-blogs.html">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-faq.html">FAQs</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages-gallery.html">Gallery</a></li>
                </ul>
            </div><!-- end Pages -->
            <div id="MetricaAuthentication" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Authentication</h6>     
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="auth-login.html">Log in</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-login-alt.html">Log in alt</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-register.html">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-register-alt.html">Register-alt</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-recover-pw.html">Re-Password</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-recover-pw-alt.html">Re-Password-alt</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-lock-screen.html">Lock Screen</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-lock-screen-alt.html">Lock Screen-alt</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-404.html">Error 404</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-404-alt.html">Error 404-alt</a></li>
                    <li class="nav-item"><a class="nav-link" href="auth-500.html">Error 500</a></li>                            
                    <li class="nav-item"><a class="nav-link" href="auth-500-alt.html">Error 500-alt</a></li>
                </ul>
            </div><!-- end Authentication-->
        </div><!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title mt-0" id="exampleModalLabel">Add Staff</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="modal-body" action="/create-staff" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter firstname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter lastname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="staff_id">Staff ID</label>
                <input type="text" name="staff_id" class="form-control" id="staff_id" aria-describedby="emailHelp" placeholder="Enter staff id">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Enter Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Staff</button>
        </div>
        </form>
        </div>
    </div>
    </div>
{{-- 
<div class="row">
    <div class="col-12">
        <h4 class="mt-0 mb-2 header-title">Buttons</h4>
        <p class="text-muted mb-3">Bootstrap includes six predefined button styles, 
            each serving its own semantic purpose.
        </p>  
    </div> <!-- end col -->
</div> <!-- end row --> --}}
