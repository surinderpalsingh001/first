<?php
include_once('../config/app.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='<?php echo $baseUrl; ?>assets/css/style.css'>
    <link rel='stylesheet' href='<?php echo $baseUrl; ?>assets/css/menu.css'>
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/bootstrap.min.css"> 
    <script src=''></script>
</head>
<body>
<div class="wrapper">
	<!-- <div class="preloader"></div> -->

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
		<div class="container">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="<?php echo $baseUrl; ?>assets/" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="index.html" class="navbar_brand float-left dn-smd">
		            <img class="img-fluid" src="<?php echo $baseUrl; ?>assets/css/images/header-logo.png" alt="header-logo.png">
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
		            <li>
		                <a href="#"><span class="title">Home</span></a>
		                <!-- Level Two-->
		                <ul>
		                    <li><a href="index.html">Home 1</a></li>
		                    <li><a href="index2.html">Home 2</a></li>
		                    <li><a href="index3.html">Home 3</a></li>
		                    <li><a href="index4.html">Home 4</a></li>
		                    <li><a href="index5.html">Home 5</a></li>
		                    <li><a href="index6.html">Home 6</a></li>
		                </ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">Find A Job</span></a>
		                <!-- Level Two-->
		                <ul>
		                    <li>
		                        <a href="#">Job List</a>
		                        <ul>
		                            <li><a href="page-job-list-v1.html">List V1</a></li>
		                            <li><a href="page-job-list-v2.html">List V2</a></li>
		                            <li><a href="page-job-list-v3.html">List V3</a></li>
		                            <li><a href="page-job-list-v4.html">List V4</a></li>
		                            <li><a href="page-job-list-v5.html">List V5</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Job Single</a>
		                        <ul>
		                            <li><a href="page-job-single-v1.html">Single V1</a></li>
		                            <li><a href="page-job-single-v2.html">Single V2</a></li>
		                            <li><a href="page-job-single-v3.html">Single V3</a></li>
		                            <li><a href="page-job-single-v4.html">Single V4</a></li>
		                            <li><a href="page-job-single-v5.html">Single V5</a></li>
		                        </ul>
		                    </li>
		                </ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">Employer</span></a>
		                <!-- Level Two-->
		                <ul>
		                    <li>
		                        <a href="#">Employer List</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-employer-list-v1.html">List V1</a></li>
		                            <li><a href="page-employer-list-v2.html">List V2</a></li>
		                            <li><a href="page-employer-list-v3.html">List V3</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Employer Single</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-employer-single-v1.html">Single V1</a></li>
		                            <li><a href="page-employer-single-v2.html">Single V2</a></li>
		                            <li><a href="page-employer-single-v3.html">Single V3</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Employer Admin</a>
		                        <!-- Level Three-->
		                        <ul>
		                        	<li><a href="page-employer-dashboard.html">Dashboard</a></li>
		                        	<li><a href="page-employer-profile.html">Profile</a></li>
		                        	<li><a href="page-employer-post-job.html">Post Job</a></li>
		                        	<li><a href="page-employer-manage-job.html">Manage Job</a></li>
		                        	<li><a href="page-employer-resume.html">Resume</a></li>
		                        	<li><a href="page-employer-packages.html">Packages</a></li>
		                        	<li><a href="page-employer-transactions.html">Transactions</a></li>
		                            <li><a href="page-employer-change-password.html">Change Password</a></li>
		                        </ul>
		                    </li>
		                </ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">Candidates</span></a>
		                <ul>
		                    <li>
		                        <a href="#">Candidates List</a>
		                        <ul>
		                            <li><a href="page-candidates-list-v1.html">List V1</a></li>
		                            <li><a href="page-candidates-list-v2.html">List V2</a></li>
		                            <li><a href="page-candidates-list-v3.html">List V3</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Candidates Single</a>
		                        <ul>
		                            <li><a href="page-candidates-single-v1.html">Single v1</a></li>
		                            <li><a href="page-candidates-single-v2.html">Single v2</a></li>
		                            <li><a href="page-candidates-single-v3.html">Single v3</a></li>
		                        </ul>
		                    </li>
		                    <li>
		                        <a href="#">Candidates Admin</a>
		                        <ul>
		                            <li><a href="page-candidates-dashboard.html">Dashboard</a></li>
		                            <li><a href="page-candidates-profile.html">Profile</a></li>
		                            <li><a href="page-candidates-my-resume.html">My Resume</a></li>
		                            <li><a href="page-candidates-applied-jobs.html">Applied Jobs</a></li>
		                            <li><a href="page-candidates-cv-manager.html">Cv Manager</a></li>
		                            <li><a href="page-candidates-favourite-jobs.html">Favourite Jobs</a></li>
		                            <li><a href="page-candidates-message.html">Message</a></li>
		                            <li><a href="page-candidates-review.html">Review</a></li>
		                            <li><a href="page-candidates-job-alert.html">Job Alert</a></li>
		                            <li><a href="page-candidates-change-password.html">Change Password</a></li>
		                        </ul>
		                    </li>
		                </ul>
		            </li>
		            <li>
		                <a href="#"><span class="title">Pages</span></a>
		                <ul>
			                <li><a href="page-about.html">About</a></li>
			                <li>
			                	<a href="#"><span class="title">Blog</span></a>
				                <ul>
				                    <li><a href="page-blog-v1.html">Page Blog v1</a></li>
				                    <li><a href="page-blog-grid.html">Blog Grid</a></li>
				                    <li><a href="page-blog-list.html">Blog List</a></li>
				                    <li><a href="page-blog-single.html">Blog Single</a></li>
				                </ul>
			                </li>
			                <li><a href="page-contact.html">Contact Us</a></li>
			                <li><a href="page-error.html">404</a></li>
			                <li><a href="page-faq.html">Faq</a></li>
			                <li><a href="page-how-it-works.html">How It Works</a></li>
			                <li><a href="page-invoice.html">Invoice</a></li>
			                <li><a href="page-log-reg.html">Login/Register</a></li>
			                <li><a href="page-pricing.html">Pricing</a></li>
			                <li><a href="page-terms-and-policies.html">Terms And Policies</a></li>
			                <li><a href="page-ui-element.html">UI Elements</a></li>
		                </ul>
		            </li>
		            <li class="last">
		                <a href="page-employer-post-job.html"><span class="title">Post a Job</span></a>
		            </li>
		        </ul>
		        <ul class="sign_up_btn pull-right dn-smd mt10">
	                <li><a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter">Log<span class="dn-md">in</span>/Reg<span class="dn-md">ister</span></a></li>
	            </ul><!-- Button trigger modal -->
		    </nav>
		</div>
	</header>
    