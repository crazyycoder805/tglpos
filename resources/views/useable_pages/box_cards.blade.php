<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bsinx-dashboard-template.multipurposethemes.com/bs5/template/vertical/main-dark/box_cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 07:48:30 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://bsinx-dashboard-template.multipurposethemes.com/bs5/images/favicon.ico">

    <title>Bsinx Admin - Dashboard  Cards UI </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="../src/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="../src/css/style.css">
	<link rel="stylesheet" href="../src/css/skin_color.css">
	
</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
    
<div class="wrapper">
	<div id="loader"></div>

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-40">
			  <span class="light-logo"><img src="../../../images/logo-letter.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../../../images/logo-white-letter.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="../../../images/logo-light-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../../../images/logo-text.png" alt="logo"></span>
		  </div>
		</a>	
	</div>   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i data-feather="menu"></i>
			    </a>
			</li>
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
			<li class="dropdown notifications-menu btn-group">
				<label class="switch">
				  	<a class="waves-effect waves-light btn-primary-light svg-bt-icon">
						<input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">
						<span class="switch-on"><i data-feather="moon"></i></span>
						<span class="switch-off"><i data-feather="sun"></i></span>
					</a>	
				</label>
        	</li>
			<li class="dropdown notifications-menu btn-group ">
				<a href="#" class="waves-effect waves-light btn-primary-light svg-bt-icon" data-bs-toggle="dropdown" title="Notifications">
					<i data-feather="bell"></i>
					<div class="pulse-wave"></div>
			    </a>
				<ul class="dropdown-menu animated bounceIn">
				  <li class="header">
					<div class="p-20">
						<div class="flexbox">
							<div>
								<h4 class="mb-0 mt-0">Notifications</h4>
							</div>
							<div>
								<a href="#" class="text-danger">Clear All</a>
							</div>
						</div>
					</div>
				  </li>
				  <li>
					<!-- inner menu: contains the actual data -->
					<ul class="menu sm-scrol">
					  <li>
						<a href="#">
						  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
						</a>
					  </li>
					  <li>
						<a href="#">
						  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
						</a>
					  </li>
					</ul>
				  </li>
				  <li class="footer">
					  <a href="#">View all</a>
				  </li>
				</ul>
			</li>
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" id="live-chat">
					<i data-feather="message-circle"></i>
			    </a>
			</li>
			
			<li class="btn-group d-xl-inline-flex d-none">
			    <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle" data-bs-toggle="dropdown">
					<img class="rounded" src="https://bsinx-dashboard-template.multipurposethemes.com/bs5/images/svg-icon/usa.svg" alt="">
				</a>
			    <div class="dropdown-menu">
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://bsinx-dashboard-template.multipurposethemes.com/bs5/images/svg-icon/usa.svg" alt=""> English</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://bsinx-dashboard-template.multipurposethemes.com/bs5/images/svg-icon/spain.svg" alt=""> Spanish</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://bsinx-dashboard-template.multipurposethemes.com/bs5/images/svg-icon/ger.svg" alt=""> German</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://bsinx-dashboard-template.multipurposethemes.com/bs5/images/svg-icon/jap.svg" alt=""> Japanese</a>
					<a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="https://bsinx-dashboard-template.multipurposethemes.com/bs5/images/svg-icon/fra.svg" alt=""> French</a>
			    </div>
			</li>
			
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
					<i data-feather="maximize"></i>
			    </a>
			</li>					  
          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item d-xl-inline-flex d-none">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon">
			  	<i data-feather="sliders"></i>
			  </a>
          </li>
			
			<!-- User Account-->
			<li class="dropdown user user-menu">
				<a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
					<img src="../../../images/avatar/avatar-13.png" class="avatar rounded-circle bg-primary-light h-40 w-40" alt="" />
				</a>
			</li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
		<!-- sidebar-->
		<section class="sidebar position-relative"> 
			<div class="multinav">
				<div class="multinav-scroll" style="height: 99%;">	
					<!-- sidebar menu-->
					<ul class="sidebar-menu" data-widget="tree">
						<li class="header fs-10 m-0 text-uppercase">Dashboard</li>
						<li class="treeview">
						<a href="#">
						<i data-feather="home"></i>
						<span>Dashboard</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						</span>
						</a>					
						<ul class="treeview-menu">					
							<li><a href="index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Analytics</a></li>
							<li><a href="index-2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Jobs</a></li>
							<li><a href="index-3.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Investment</a></li>
							<li><a href="index-4.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Crypto</a></li>
							<li><a href="index-5.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Medical</a></li>		
							<li><a href="index-6.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Education</a></li>
							<li><a href="index-7.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>E-Commerce</a></li>
							<li><a href="index-8.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>CRM</a></li>
							<li><a href="index-9.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>HRM</a></li>
							<li><a href="index-10.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Warehouse</a></li>
							<li><a href="index-11.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Restaurant</a></li>
							<li><a href="index-12.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>School</a></li>
							<li><a href="index-13.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>
							<li><a href="index-14.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Law Firm</a></li>
							<li><a href="index-15.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Realestate</a></li>
							<li><a href="index-16.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Traval</a></li>
							<li><a href="index-17.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sales</a></li>
							<li><a href="index-18.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ticket</a></li>
						</ul>
					</li>
											
					<li class="header fs-10 m-0 text-uppercase">Components</li>
					<li class="treeview">
						<a href="#">
						<i data-feather="headphones"></i>
						<span>Support</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						</span>
						</a>					
						<ul class="treeview-menu">					
						<li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
						<li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>					
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
						<i data-feather="edit"></i>
						<span>Features</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						</span>
						</a>
						<ul class="treeview-menu">											
						<li class="treeview">
							<a href="#">
								<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
								<li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
								<li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
								<li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
								<li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
							</ul>
						</li>												
						<li class="treeview">
							<a href="#">
								<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>BS UI
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>
								<li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
								<li><a href="ui_border_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
								<li><a href="ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>	
								<li><a href="ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
								<li><a href="ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
								<li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
								<li><a href="ui_progress_bars.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>
							</ul>
						</li>										
						<li class="treeview">
							<a href="#">
								<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="icons_fontawesome.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
								<li><a href="icons_glyphicons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
								<li><a href="icons_material.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>	
								<li><a href="icons_themify.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
								<li><a href="icons_simpleline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
								<li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
								<li><a href="icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
								<li><a href="icons_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
							</ul>
						</li>									
						<li class="treeview">
							<a href="#">
								<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom UI
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
								<li><a href="ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
								<li><a href="ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
								<li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
								<li><a href="ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
								<li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Components
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
								<li><a href="component_date_paginator.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
								<li><a href="component_media_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
								<li><a href="component_rangeslider.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
								<li><a href="component_rating.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
								<li><a href="component_animations.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
								<li><a href="extension_fullscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
								<li><a href="extension_pace.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
								<li><a href="component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
								<li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>	
							</ul>
						</li>  
						</ul>
					</li>		
					<li class="treeview">
						<a href="#">
						<i data-feather="pie-chart"></i>
						<span>Forms & Charts</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						</span>
						</a>					
						<ul class="treeview-menu">					
						<li class="treeview">
							<a href="#">
								<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="forms_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
								<li><a href="forms_general.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
								<li><a href="forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>	
								<li><a href="forms_validation.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
								<li><a href="forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
								<li><a href="forms_xeditable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
								<li><a href="forms_dropzone.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
								<li><a href="forms_code_editor.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
								<li><a href="forms_editors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
								<li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
							</ul>
						</li>  
						<li class="treeview">
							<a href="#">
								<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Charts
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="charts_chartjs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
								<li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
								<li><a href="charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
								<li><a href="charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
								<li><a href="charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
								<li><a href="charts_chartist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
								<li><a href="charts_apex.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Apex Chart</a></li>
								<li class="treeview">
									<a href="#">
										<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>C3 Charts
										<span class="pull-right-container">
											<i class="fa fa-angle-right pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="charts_c3_axis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
										<li><a href="charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
										<li><a href="charts_c3_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
										<li><a href="charts_c3_line.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
									</ul>
								</li>
								<li class="treeview">
									<a href="#">
										<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>eCharts
										<span class="pull-right-container">
											<i class="fa fa-angle-right pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
										<li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
										<li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie Chart</a></li>
									</ul>
								</li>							
							</ul>
						</li>
						</ul>
					</li>			
					<li class="treeview">
						<a href="#">
						<i data-feather="grid"></i>
						<span>Tables</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						</span>
						</a>					
						<ul class="treeview-menu">					
						<li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
						<li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
						<li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
						<li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>					
						</ul>
					</li>				 
					<li class="treeview">
						<a href="#">
						<i data-feather="database"></i>
						<span>Apps & Widgets</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						</span>
						</a>
						<ul class="treeview-menu">					
						<li class="treeview">
							<a href="#">
								<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Apps
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
								<li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
								<li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
								<li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
							</ul>
						</li>										
						<li class="treeview">
							<a href="#">
								<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li class="treeview">
									<a href="#">
										<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom
										<span class="pull-right-container">
											<i class="fa fa-angle-right pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blog</a></li>
										<li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
										<li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
										<li><a href="widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
										<li><a href="widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
										<li><a href="widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
										<li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>
										<li><a href="email_index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>	
									</ul>
								</li>											  	
								<li class="treeview">
									<a href="#">
										<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maps
										<span class="pull-right-container">
											<i class="fa fa-angle-right pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="map_google.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Google Map</a></li>
										<li><a href="map_vector.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vector Map</a></li>
									</ul>
								</li>					  	
								<li class="treeview">
									<a href="#">
										<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals
										<span class="pull-right-container">
											<i class="fa fa-angle-right pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="component_modals.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a></li>
										<li><a href="component_sweatalert.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
										<li><a href="component_notification.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Toastr</a></li>
									</ul>
								</li>
							</ul>
						</li>					
						<li class="treeview">
							<a href="#">
								<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ecommerce
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="ecommerce_products.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
								<li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
								<li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
								<li><a href="ecommerce_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
								<li><a href="ecommerce_orders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
								<li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sample Pages
								<span class="pull-right-container">
									<i class="fa fa-angle-right pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
								<li><a href="invoice_2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice 2</a></li>
								<li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>
								<li><a href="invoicelist_2.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List 2</a></li>	
								<li><a href="contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>	
								<li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
								<li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
								<li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
								<li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
								<li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
								<li><a href="sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
								<li><a href="sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
							</ul>
						</li>
						</ul>
					</li>	 
					<li class="header  fs-10 m-0">LOGIN & ERROR</li>
					<li class="treeview">
						<a href="#">
						<i data-feather="lock"></i>
						<span>Authentication</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						</span>
						</a>
						<ul class="treeview-menu">
						<li>
							<a href="auth_login.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a>
							<a href="auth_login_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a>
						</li>
						<li>
							<a href="auth_register.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a>
							<a href="auth_register_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a>
						</li>
						<li>
							<a href="auth_lockscreen.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a>
							<a href="auth_lockscreen_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a>
						</li>
						<li>
							<a href="auth_user_pass.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a>
							<a href="auth_user_pass_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a>
						</li>	
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
						<i data-feather="alert-triangle"></i>
						<span>Miscellaneous</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-right pull-right"></i>
						</span>
						</a>
						<ul class="treeview-menu">
						<li>
							<a href="error_404.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a>
							<a href="error_404_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a>
						</li>
						<li>
							<a href="error_500.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a>
							<a href="error_500_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a>
						</li>
						<li>
							<a href="error_maintenance.html" target="_blank" class="d-light"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a>
							<a href="error_maintenance_dark.html" target="_blank" class="d-dark"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a>
						</li>	
						</ul>
					</li>	 	     
					</ul>
					
					<div class="sidebar-widgets">
						<div class="mx-25 mb-30 pb-5 bg-primary-light rounded-5">
						<div class="text-center">
							<img src="../../../images/gadget_people_800x600.gif" class="sideimg p-5 rounded-5" alt="">
							<h4 class="title-bx text-black m-0">Bsinx Admin</h4>
						</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">User Box</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Box Cards</li>
								<li class="breadcrumb-item active" aria-current="page">User Box</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <!-- START Card With Image -->			
			<div class="card bg-primary-light">
			  <div class="card-header">
				<h4 class="card-title">Card Style</h4>
			  </div>
			</div>
		  	
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="row g-0 align-items-center">
							<div class="col-md-4">
								<img src="../../../images/gallery/landscape4.jpg" class="card-img" alt="...">
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title fw-600">Card title</h5>
									<p class="card-text text-gray-600">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									<p class="card-text text-gray-600"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div> <!-- end card-body-->
							</div> <!-- end col -->
						</div> <!-- end row-->
					</div> <!-- end card-->
				</div> <!-- end col-->
				<div class="col-lg-6">
					<div class="card">
						<div class="row g-0 align-items-center">
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title fw-600">Card title</h5>
									<p class="card-text text-gray-600">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
									<p class="card-text text-gray-600"><small class="text-muted">Last updated 3 mins ago</small></p>
								</div> <!-- end card-body -->
							</div> <!-- end col -->
							<div class="col-md-4">
								<img src="../../../images/gallery/landscape1.jpg" class="card-img" alt="...">
							</div> <!-- end col -->
						</div> <!-- end row-->
					</div> <!-- end card -->
				</div> <!-- end col-->
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="card card-body">
						<h5 class="card-title fw-600">Special title treatment</h5>
						<p class="card-text text-gray-600">With supporting text below as a natural lead-in to additional
							content.</p>
						<a href="javascript: void(0);" class="btn btn-primary-light">Go somewhere</a>
					</div> <!-- end card-->
				</div> <!-- end col-->
				<div class="col-sm-6">
					<div class="card card-body text-end">
						<h5 class="card-title fw-600">Special title treatment</h5>
						<p class="card-text text-gray-600">With supporting text below as a natural lead-in to additional
							content.</p>
						<a href="javascript: void(0);" class="btn btn-primary-light">Go somewhere</a>
					</div> <!-- end card-->
				</div> <!-- end col-->
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<h6 class="card-header">Featured</h6>
						<div class="card-body">
							<h5 class="card-title fw-600">Special title treatment</h5>
							<p class="card-text text-gray-600">With supporting text below as a natural lead-in to
								additional content.</p>
							<a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
						</div> <!-- end card-body-->
					</div> <!-- end card-->
				</div> <!-- end col-->

				<div class="col-md-4">
					<div class="card">
						<div class="card-header">
							Quote
						</div>
						<div class="card-body">
							<blockquote class="card-bodyquote">
								<p class="fw-500 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
									erat a ante.</p>
								<footer>Someone famous in <cite title="Source Title">Source Title</cite>
								</footer>
							</blockquote>
						</div> <!-- end card-body-->
					</div> <!-- end card-->
				</div> <!-- end col-->

				<div class="col-md-4">
					<div class="card">
						<div class="card-header">
							Featured
						</div>
						<div class="card-body">
							<a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
						</div>
						<div class="card-footer text-muted">
							2 days ago
						</div>
					</div> <!-- end card-->
				</div> <!-- end col-->
			</div>
			
			
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<!-- Simple card -->
					<div class="card d-block">
						<img class="card-img-top" src="../../../images/gallery/landscape1.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title fw-600">Card title</h5>
							<p class="card-text text-gray-600">Some quick example text to build on the card title and make
								up the bulk of the card's content. Some quick example text to build on the card title and make up.</p>
							<a href="javascript: void(0);" class="btn btn-primary-light">Button</a>
						</div> <!-- end card-body-->
					</div> <!-- end card-->
				</div><!-- end col -->

				<div class="col-md-6 col-lg-3">
					<div class="card d-block">
						<img class="card-img-top" src="../../../images/gallery/landscape2.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title fw-600">Card title</h5>
							<p class="card-text text-gray-600">Some quick example text to build on the card..</p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Cras justo odio</li>
						</ul>
						<div class="card-body">
							<a href="javascript: void(0);" class="card-link text-custom">Card link</a>
							<a href="javascript: void(0);" class="card-link text-custom">Another link</a>
						</div> <!-- end card-body-->
					</div> <!-- end card-->
				</div><!-- end col -->

				<div class="col-md-6 col-lg-3">
					<div class="card d-block">
						<img class="card-img-top" src="../../../images/gallery/landscape3.jpg" alt="Card image cap">
						<div class="card-body">
							<p class="card-text text-gray-600">Some quick example text to build on the card title and make
								up the bulk of the card's content. Some quick example text to build on the card title and make up.</p>
							<a href="javascript: void(0);" class="btn btn-primary-light">Button</a>
						</div> <!-- end card-body-->
					</div> <!-- end card-->
				</div><!-- end col -->

				<div class="col-md-6 col-lg-3">
					<div class="card d-block">
						<div class="card-body">
							<h5 class="card-title fw-600">Card title</h5>
							<h6 class="card-subtitle text-muted">Support card subtitle</h6>
						</div>
						<img class="img-fluid" src="../../../images/gallery/landscape4.jpg" alt="Card image cap">
						<div class="card-body">
							<p class="card-text text-gray-600">Some quick example text to build on the card title and make
								up the bulk of the card's content.</p>
							<a href="javascript: void(0);" class="card-link text-custom">Card link</a>
							<a href="javascript: void(0);" class="card-link text-custom">Another link</a>
						</div> <!-- end card-body-->
					</div> <!-- end card-->
				</div><!-- end col -->
			</div>
			
		  <div class="row">
			<div class="col-md-12 col-lg-4">
				<div class="card">
				  <img class="card-img-top" src="../../../images/gallery/landscape5.jpg" alt="Card image cap">
				  <div class="card-body">
					<h4 class="card-title fw-600">Card title</h4>
					<p class="card-text text-gray-600">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <div class="card-footer justify-content-between d-flex">
					<span class="text-muted">Last updated 3 mins ago</span>
					<span>
						<i class="fa fa-star text-warning"></i>
						<i class="fa fa-star text-warning"></i>
						<i class="fa fa-star text-warning"></i>
						<i class="fa fa-star text-warning"></i>
						<i class="fa fa-star-half text-warning"></i>
						<span class="text-muted ms-2">(12)</span>
					</span>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card">
				  <div class="card-body">
					<h4 class="card-title fw-600">Card title</h4>
					<p class="card-text text-gray-600">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <img class="card-img-top bter-0 btsr-0" src="../../../images/gallery/landscape6.jpg" alt="Card image cap">
				  <div class="card-footer d-flex justify-content-between">
					<span class="fs-14 text-muted">Nov 12, 11:25 am</span>
					<span class="fs-14  text-muted">Due in 12 days</span>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card">
				  <div class="card-body">
					<h4 class="card-title fw-600">Card title</h4>
					<p class="card-text text-gray-600">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <div class="card-footer d-flex justify-content-between align-items-center">
					<div class="text-muted"><i class="fa fa-spinner me-2"></i> Processing...</div>

					<div class="progress w-100" style="height: 0.375rem;">
						<div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width: 60%;">
							<span class="sr-only">60% Complete</span>
						</div>
					</div>
				  </div>
				  <img class="card-img-bottom" src="../../../images/gallery/landscape7.jpg" alt="Card image cap">
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card">
				  <div class="card-header">
					<h4 class="card-title fw-600">Below card header</h4>
					<div class="header-elements">
						<span class="badge bg-danger badge-pill">Paid</span>
					</div>
				  </div>
				  <img class="card-img-top bter-0 btsr-0" src="../../../images/gallery/landscape8.jpg" alt="Card image cap">
					
				  <div class="card-body">
					  <p class="card-text text-gray-600">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
					
				  <div class="card-footer">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Add comment...">
						<button class="btn bg-info btn-sm" type="button"><i class="fa fa-send-o"></i></button>
					</div>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card">
					<div class="card-header d-flex justify-content-between">
						<span><i class="fa fa-user me-2"></i> <a href="#">Nil Yeager</a></span>
						<span class="text-muted">Added 4 hours ago</span>
					</div>
				  <img class="card-img-top bter-0 btsr-0" src="../../../images/gallery/landscape9.jpg" alt="Card image cap">
				  <div class="card-body">
					<h4 class="card-title fw-600">Multiple titles</h4>
					<p class="card-text text-gray-600">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
				  <div class="card-footer justify-content-between d-flex">
					<ul class="list-inline mb-0 me-2">
						<li class="list-inline-item">
							<a href="#"><i class="fa fa-heart-o"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="#"><i class="fa fa-comment-o"></i></a>
						</li>
					</ul>

					<ul class="list-inline mb-0">
						<li><a href="#">Edit</a></li>
						<li><a href="#">Delete</a></li>
					</ul>
				  </div>
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
				<div class="card">
				  <img class="card-img-top" src="../../../images/gallery/landscape10.jpg" alt="Card image cap">			  

					<div class="card-footer d-flex justify-content-between bt-0 pb-0">
						<span class="text-muted">412548 followers</span>

						<ul class="list-inline mb-0">
							<li class="list-inline-item">
								<a href="#" class="text-info"><i class="fa fa-thumbs-o-up"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="text-danger"><i class="fa fa-thumbs-o-down"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="text-muted"><i class="fa fa-flag-o"></i></a>
							</li>
						</ul>
					</div>
					
				  <div class="card-body">
					<h4 class="card-title fw-600">Multiple footers</h4>
					<p class="card-text text-gray-600">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				  </div>
					<div class="card-footer d-flex justify-content-between">
						<a href="#" class="text-default"><i class="fa fa-commenting-o"></i> Comment</a>
						<span class="text-muted"><i class="fa fa-eye"></i> 673</span>
					</div>
				</div>
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		  <!-- END Card with image -->

		  <!-- START Card With Image -->
		  <div class="row fx-element-overlay">
		   <div class="col-12"> 
			<div class="card bg-primary-light">
			  <div class="card-header">
				<h4 class="card-title">Fade-in effect</h4>
				<h6 class="card-subtitle">You can use by default <code>fx-overlay</code></h6>
			  </div>
			</div>
		   </div>
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../../../images/card/1.jpg" alt="user">
						<div class="fx-overlay">
							<ul class="fx-info">
								<li><a class="btn default btn-outline image-popup-vertical-fit" href="../../../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../../../images/card/2.jpg" alt="user">
						<div class="fx-overlay">
							<ul class="fx-info">
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../../../images/card/3.jpg" alt="user">
						<div class="fx-overlay">
							<ul class="fx-info">
								<li><a class="btn default btn-outline image-popup-vertical-fit" href="../../../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		  <!-- END Card with image -->

		  <!-- START Card With Image -->
		  <div class="row fx-element-overlay">
		   <div class="col-12">
			<div class="card bg-primary-light">
			  <div class="card-header">
				<h4 class="card-title">Scroll down effect</h4>
				<h6 class="card-subtitle">You can use by default <code>fx-overlay scrl-dwn</code></h6>
			  </div>
			</div>
		   </div>
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../../../images/card/1.jpg" alt="user">
						<div class="fx-overlay scrl-dwn">
							<ul class="fx-info">
								<li><a class="btn default btn-outline image-popup-vertical-fit" href="../../../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../../../images/card/2.jpg" alt="user">
						<div class="fx-overlay scrl-dwn">						
							<ul class="fx-info">
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../../../images/card/3.jpg" alt="user">
						<div class="fx-overlay scrl-dwn">
							<ul class="fx-info">
								<li><a class="btn default btn-outline image-popup-vertical-fit" href="../../../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		  <!-- END Card with image -->

		  <!-- START Card With Image -->
		  <div class="row fx-element-overlay">
		   <div class="col-12"> 
			<div class="card bg-primary-light">
			  <div class="card-header">
				<h4 class="card-title">Scroll up effect</h4>
				<h6 class="card-subtitle">You can use by default <code>fx-overlay scrl-up</code></h6>
			  </div>
			</div>
		   </div>
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../../../images/card/1.jpg" alt="user">
						<div class="fx-overlay scrl-up">
							<ul class="fx-info">
								<li><a class="btn default btn-outline image-popup-vertical-fit" href="../../../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../../../images/card/2.jpg" alt="user">
						<div class="fx-overlay scrl-up">						
							<ul class="fx-info">
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-12 col-lg-4">
			  <div class="box">
				<div class="fx-card-item">
					<div class="fx-card-avatar fx-overlay-1"> <img src="../../../images/card/3.jpg" alt="user">
						<div class="fx-overlay scrl-up">
							<ul class="fx-info">
								<li><a class="btn default btn-outline image-popup-vertical-fit" href="../../../images/card/1.jpg"><i class="ion-search"></i></a></li>
								<li><a class="btn default btn-outline" href="javascript:void(0);"><i class="ion-link"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="fx-card-content">
						<h3 class="box-title">Maical Luka</h3> <small>Managing Director</small>
						<br> </div>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		  <!-- END Card with image -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="#" target="_blank">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Side panel --> 
  <!-- quick_user_toggle -->
  <div class="modal modal-right fade" id="quick_user_toggle" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content slim-scroll3">
		  <div class="modal-body p-30 bg-white">
			<div class="d-flex align-items-center justify-content-between pb-30">
				<h4 class="m-0">User Profile
				<small class="text-fade fs-12 ms-5">12 messages</small></h4>
				<a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
					<span class="fa fa-close"></span>
				</a>
			</div>
            <div>
                <div class="d-flex flex-row">
                    <div class=""><img src="../../../images/avatar/avatar-13.png" alt="user" class="rounded bg-danger-light w-150" width="100"></div>
                    <div class="ps-20">
                        <h5 class="mb-0">Nil Yeager</h5>
                        <p class="my-5 text-fade">Manager</p>
                        <a href="mailto:dummy@gmail.com"><span class="icon-Mail-notification me-5 text-success"><span class="path1"></span><span class="path2"></span></span> dummy@gmail.com</a>
                        <button class="btn btn-success-light btn-sm mt-5"><i class="ti-plus"></i> Follow</button>
                    </div>
                </div>
			</div>
              <div class="dropdown-divider my-30"></div>
              <div>
                <div class="d-flex align-items-center mb-30">
                    <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                          <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                    <div class="d-flex flex-column fw-500">
                        <a href="extra_profile.html" class="text-dark hover-primary mb-1 fs-16">My Profile</a>
                        <span class="text-fade">Account settings and more</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-30">
                    <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                        <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                    <div class="d-flex flex-column fw-500">
                        <a href="mailbox.html" class="text-dark hover-danger mb-1 fs-16">My Messages</a>
                        <span class="text-fade">Inbox and tasks</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-30">
                    <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                        <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                    </div>
                    <div class="d-flex flex-column fw-500">
                        <a href="setting.html" class="text-dark hover-success mb-1 fs-16">Settings</a>
                        <span class="text-fade">Accout Settings</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-30">
                    <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                        <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                    </div>
                    <div class="d-flex flex-column fw-500">
                        <a href="extra_taskboard.html" class="text-dark hover-info mb-1 fs-16">Project</a>
                        <span class="text-fade">latest tasks and projects</span>
                    </div>
                </div>
              </div>
              <div class="dropdown-divider my-30"></div>
              <div>
                <div class="media-list">
                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">10:10</h4>
                      <div class="media-body ps-15 bs-5 rounded border-primary">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Johne</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">08:40</h4>
                      <div class="media-body ps-15 bs-5 rounded border-success">
                        <p>Proin iaculis eros non odio ornare efficitur.</p>
                        <span class="text-fade">by Amla</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">07:10</h4>
                      <div class="media-body ps-15 bs-5 rounded border-info">
                        <p>In mattis mi ut posuere consectetur.</p>
                        <span class="text-fade">by Josef</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">01:15</h4>
                      <div class="media-body ps-15 bs-5 rounded border-danger">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Rima</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">23:12</h4>
                      <div class="media-body ps-15 bs-5 rounded border-warning">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Alaxa</span>
                      </div>
                    </a>
                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">10:10</h4>
                      <div class="media-body ps-15 bs-5 rounded border-primary">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Johne</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">08:40</h4>
                      <div class="media-body ps-15 bs-5 rounded border-success">
                        <p>Proin iaculis eros non odio ornare efficitur.</p>
                        <span class="text-fade">by Amla</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">07:10</h4>
                      <div class="media-body ps-15 bs-5 rounded border-info">
                        <p>In mattis mi ut posuere consectetur.</p>
                        <span class="text-fade">by Josef</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">01:15</h4>
                      <div class="media-body ps-15 bs-5 rounded border-danger">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Rima</span>
                      </div>
                    </a>

                    <a class="media media-single px-0" href="#">
                      <h4 class="w-50 text-gray fw-500">23:12</h4>
                      <div class="media-body ps-15 bs-5 rounded border-warning">
                        <p>Morbi quis ex eu arcu auctor sagittis.</p>
                        <span class="text-fade">by Alaxa</span>
                      </div>
                    </a>
                  </div>
            </div>
		  </div>
		</div>
	  </div>
  </div>
  <!-- /quick_user_toggle --> 
	
  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white" ></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" ><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../../../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../../../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../../../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../../../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../../../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../../../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../../../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../../../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
	
	
</div>
<!-- ./wrapper -->
	
	
	
	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-50" type="button" data-bs-toggle="dropdown">
                      <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-50" type="button">
                      <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../../../images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">You</a>
                                <p class="text-muted fs-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="../../../images/avatar/3.jpg" class="avatar avatar-lg" alt="">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.         
                        </div>        
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../../../images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>      
            </div>
		</div>
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="../src/js/vendors.min.js"></script>
	<script src="../src/js/pages/chat-popup.js"></script>
    <script src="../../../assets/icons/feather-icons/feather.min.js"></script>	<script src="../../../assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="../../../assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
	
	<!-- Bsinx Admin App -->
	<script src="../src/js/demo.js"></script>
	<script src="../src/js/template.js"></script>
	
	
	
</body>

<!-- Mirrored from bsinx-dashboard-template.multipurposethemes.com/bs5/template/vertical/main-dark/box_cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 07:48:33 GMT -->
</html>
