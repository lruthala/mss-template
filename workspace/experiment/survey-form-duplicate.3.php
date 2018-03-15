<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Survey Form | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/fileinput.js"></script>
        <link href="../boostrap-slider/css/boostrap-slider.css" rel="stylesheet">
        <script src="../js/custom.js" type="text/javascript"></script>
        <!--range slider link-->
        <link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>
        <!--range slider link-->
        <script src="../js/Validation.js" type="text/javascript"></script>
            <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link href="/resources/demos/style.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        <link rel="script">
         	<link rel="stylesheet" href="../../NewFolder/css/bootstrap.1.css" type="text/css" />
         	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
          <style>
        .panel{box-shadow: 0px 0px 20px 1px rgba(0,0,0,0.2);border-radius:12px;}
        .chat-box{height:400px;position: fixed;bottom: 0;font-family: Lato, sans-serif !important;}
        .msg {margin-right: -24%;}
        .chat-window{right:0;position:fixed;float:right;margin-left:10px;}
        .chat-window > div > .panel{border-radius: 5px 5px 0 0;}
        .icon_minim{padding:2px 10px;}
       .msg_container {padding: 10px;overflow: hidden;display: table;}
        .msg_container_base{background: #ececec;margin: 0;padding: 0 10px 10px;max-height:300px;overflow-x:hidden;}
        .top-bar {background: #666;color: white;padding: 10px;position: relative;overflow: hidden;}
        .messages > time {font-size: 11px;color: #ccc;}
        .chat-image {display: block;background-image: none;background-repeat: repeat;background-position-x: 0%;background-position-y: 0%;background-size: auto auto;-moz-border-radius: 50px;-webkit-border-radius: 50px;background-position: center;background-size: cover;background-repeat: no-repeat;}
        .avatar { padding: 0px; height: 12px; width: 34px; top: -3px;}
        .panel-default >.panel-heading {color:#ffffff ;background-color:#232527;height:55px;border-color: transparent;margin-top: -1px;margin-left: -1px;border-radius:10px 10px 0px 0px;}
        .msg_container_base::-webkit-scrollbar-track{-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);background-color: #F5F5F5;}
        .msg_container_base::-webkit-scrollbar{width: 12px;background-color: #F5F5F5;}
        .msg_container_base::-webkit-scrollbar-thumb{-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);background-color: #555;}
        .btn-group.dropup{position:fixed;left:0px;bottom:0;}
        .panel-footer .send {color: #8c8c8c;background-color: transparent;padding: 13px 12px 12px 11px;border-radius: 50px;font-size: 13pt;margin-right: -10px;}
        .panel-footer .name {margin: 0 0 0 20px;text-transform: uppercase;font-size: 13pt;color:#515151;}
        .panel-footer .right {position: absolute;right: 40px;}
        .write-message {border: none !important;width: 95;padding :8px 0px;white-space: normal;word-wrap: break-word;font-size: 15px;overflow-x: hidden;}
        .panel-footer *::-webkit-input-placeholder {color: #C0C0C0;font-size: 13pt;}
        .panel-footer input *:-moz-placeholder {color: #C0C0C0;font-size: 13pt;}
        .panel-footer input *::-moz-placeholder {color: #C0C0C0;font-size: 13pt;margin-left:5px;}
        .panel-footer input *:-ms-input-placeholder {color: #C0C0C0;font-size: 13pt;}
        .panel-footer {padding: 0px 18px;border-top: 0px solid transparent;border-bottom-right-radius: 3px;border-bottom-left-radius: 3px;background-color: #ffffff;height: 40px;border-radius:10px;}
        .clickable {background: #232527;display: inline-block;padding: 9px 11px;border-radius: 20px;cursor: pointer;margin-top: -28px;color: #ffffff;margin-right: -15px;font-size: 17px;}
      .base_receive {padding-right: 33%;margin-left: -10px;margin-bottom: -12px;}
        .panel-title{margin-top:-30px;font-size:17px;position : absolute;margin-left: 25px;color:#ffffff!important;}
        textarea:focus, input:focus{outline: none;}
        .try {cursor: pointer;text-align: center;width: 10%;height: 40px;background-color:#ef4048;border-radius: 38px;padding-top: 8px;position: fixed;bottom: 3%;right:1%;cursor: pointer;font-size:17px;line-height:1.52 !important;}
        .try .fa {color: #ffffff;font-size: 18px;}
        .try .textual {font-family: 'Lato', sans-serif !important;color: #fff;text-align: center;}
        .badge-notify{background:#232527;position:absolute;right:0;top:-10px;}
        #field1::-webkit-input-placeholder { color:#8c8c8c;font-size:15px !important;}
        #field1::-moz-placeholder { color:#8c8c8c;font-size:15px !important;}
        .rocky{-webkit-animation-name:holder;-webkit-animation-duration:0.4s;animation-name: holder;animation-duration: 0.4s;}    
        @keyframes holder {from{margin-right:-1600px;}to:{margin-right:-10px;}}
        -webkit-@keyframes holder {from{margin-right:-1600px;}to:{margin-right:-10px;}}
        textarea {resize: none;border:none !important;width:100%;color:#232527;}
        .form-control:focus {border-color: #66afe9;outline: 0;box-shadow: inset 0 1px 1px rgba(0,0,0,0), 0 0 8px rgba(0,0,0,0) !important;}
        #cin::-webkit-scrollbar-thumb{box-shadow: 1px 1px 1px 1px grey;background-color: #232527;}
        #cin::-webkit-scrollbar {width: 2px;}
        #cin::-webkit-scrollbar-track {-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);border-radius: 10px;}
        #cin::-webkit-scrollbar-thumb {border-radius: 10px;-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); }
        scrollbar {-moz-appearance: none !important;}
        scrollbarbutton {-moz-appearance: none !important;}
        thumb{-moz-appearance: none !important;}
        scrollcorner {-moz-appearance: none !important;resize:both;}
        scrollbar[orient="vertical"] {color:silver;}
        #footer{margin-top:0px!important;}
        .mega-menu-content{	width:50% !important;margin-left:45% !important;}
        #header.sticky-header:not(.static-sticky) #top-cart .top-cart-content {top: 34px;padding-bottom: 20px !important;}
        .top-cart-items { padding: 15px !important; }
        .top-cart-item:first-child {padding-top: 1px !important;margin-top: 0 !important;border-top: 0 !important;}
        .signin-input { width: 100% !important; }
        .signin-input { display: block; position: relative; margin-right: 4%; margin-bottom: 18px; float: left;}
        label {display: inline-block;margin-bottom: 8px;font-weight: 700;}
        label {display: inline-block;font-size: 13px;font-weight: 700;font-family: 'Lato', sans-serif;text-transform: uppercase;letter-spacing: 1px;color: #555; margin-bottom: 10px; cursor: pointer; }
        .sm-form-control {height: auto;
        }
        .sm-form-control {
            display: block;
            width: 100%;
            height: 38px;
            padding: 8px 14px;
            font-size: 15px;
            line-height: 1.42857143;
            color: #555555;
            background-color: #ffffff;
            background-image: none;
            border: 2px solid #DDD;
            border-radius: 0 !important;
            -webkit-transition: border-color ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s;
            transition: border-color ease-in-out .15s;
        }
        .col_full {
            clear: both;
            float: none;
            margin-right: 0;
        }
        .button.button-3d {
            border-radius: 3px;
            border-bottom: 3px solid rgba(0,0,0,0.15);
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
        
        
        .button {
            display: inline-block;
            position: relative;
            cursor: pointer;
            outline: none;
            white-space: nowrap;
            margin: 5px;
            padding: 0 22px;
            font-size: 14px;
            height: 40px;
            line-height: 40px;
            background-color: #00aae7 !important;
            color: #FFF;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
        }
        ul li a{
        	text-decoration:none !important;
        	
        	}
        #email-first{width:93%!important;}
        .submit-last{width:25%!important;}
    
     /* Changes */   
  
  .msg_receive > p {
    background: #00aae7;
    color: #fff;
    margin: 0px 35px;
    border-radius: 5px 5px 15px;
    font-size: 14px;
    padding: 6px 10px;
  margin-right: -33px;
}
.msg_sent > p {
       background: #0d416b;
    color: #fff;
    margin: 0px -31px;
    border-radius: 5px 5px 15px;
    font-size: 14px;
    padding: 6px 10px;
    margin-right: 9px;
    float: right;
}
.typing-indicator {
    background-color: #00aae7;
    border-radius: 5px 5px 15px;
    display: table;
    margin: 0 auto;
    position: relative;
    -webkit-animation: 2s bulge infinite ease-out;
    animation: 2s bulge infinite ease-out;
    padding: 9px 15px;
    margin-left: 38px;
}
.typing-indicator::before, .typing-indicator::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: -2px;
  height: 20px;
  width: 20px;
  border-radius: 50%;
}
.typing-indicator::after {
  height: 10px;
  width: 10px;
  left: -10px;
  bottom: -10px;
}
.typing-indicator span {
  height: 5px;
  width: 5px;
  float: left;
  margin: 0 1px;
  background-color: #fff;
  display: block;
  border-radius: 50%;
  opacity: 0.4;
}
.typing-indicator span:nth-of-type(1) {
  -webkit-animation: 1s blink infinite 0.3333s;
          animation: 1s blink infinite 0.3333s;
}
.typing-indicator span:nth-of-type(2) {
  -webkit-animation: 1s blink infinite 0.6666s;
          animation: 1s blink infinite 0.6666s;
}
.typing-indicator span:nth-of-type(3) {
  -webkit-animation: 1s blink infinite 0.9999s;
          animation: 1s blink infinite 0.9999s;
}

@-webkit-keyframes blink {
  50% {
    opacity: 1;
  }
}

@keyframes blink {
  50% {
    opacity: 1;
  }
}
@-webkit-keyframes bulge {
  50% {
    -webkit-transform: scale(1.05);
            transform: scale(1.05);
  }
}
@keyframes bulge {
  50% {
    -webkit-transform: scale(1.05);
            transform: scale(1.05);
  }
}   
   .base_sent {
    padding-left: 33%;
    width: 103%;
}  
  .badge {
    min-width: 23px!important;
    padding: 5px 7px!important;
    border-radius:12px;
}
</style>
    </head>
    <body>
   <section class="stretched sticky-responsive-pagemenu">
        
     <header id="header" class="transparent-header full-header page-section" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class=" clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="../../version-3.0/images/miracle-logo.svg" width="150px" height="70px"><img src="../../version-3.0/images/miracle-logo.svg" width="150px" height="70px"alt="Miracle Logo" style="margin-left:15px; margin-top: -2px;"></a>
						<!--	<a href="index.html" class="standard-logo" data-dark-logo="../NewFolder/miracle-logo.svg"  width="150px" height="70px"><img src="../NewFolder/miracle-logo.svg" width="150px" height="70px" alt="Miracle Logo" style="margin-left:15px;"></a>-->
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" style="padding-top:5px;">
                         <button style="color:#ef4048;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
						<ul class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							
							<li class="mega-menu"><a href="#"><div>Company</div></a>
								<div class="mega-menu-content style-2 clearfix " style="width:100%">
									<ul class="mega-menu-column col-md-4">
									<li class="mega-menu-title"><a href="http://www.miraclesoft.com/company/"><div>About US</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/company/about-us"><div>Company</div></a></li>
													<li><a href="http://www.miraclesoft.com/contact/locations"><div>Global Presence</div></a></li>
												<li><a href="http://www.miraclesoft.com/partnerships/"><div>Partnerships</div></a></li>
												<li><a href="http://www.miraclesoft.com/company/vision"><div>Vision 2020</div></a></li>
												<li><a href="http://www.miraclesoft.com/company/awards"><div>Awards & Certifications</div></a></li>
											
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/why/"><div>Why Miracle</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/why/global"><div>Global Delivery Model</div></a></li>
												<li><a href="http://www.miraclesoft.com/why/methodologies"><div>Our Methodologies</div></a></li>
												<li><a href="http://www.miraclesoft.com/library/index?flag=success"><div>Success Stories</div></a></li>
												<li><a href="http://www.miraclesoft.com/why/excellence"><div>CoE Ecosystem</div></a></li>
												<li><a href="http://www.miraclesoft.com/why/innovation"><div>Innovation Center</div></a></li>
												
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/contact/"><div>Contact</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/contact/"><div>Contact Us</div></a></li>
											
											<li><a href="http://www.miraclesoft.com/contact/verify"><div>Employee Verification</div></a></li>
												<li><a href="http://www.miraclesoft.com/contact/employee-referrals"><div>Employee Referral</div></a></li>
												<li><a href="http://www.miraclesoft.com/contact/suggestion-login"><div>Suggestion Box</div></a></li>
												
											</ul>
										</li>
									</ul>
									
								</div>
							</li>
							<li class="mega-menu"><a href="#"><div>Our Services</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-6">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/services/"><div>Services</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/services/application-services"><div>Application Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/architecture-consulting"><div>Architecture and Consulting</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/bpo"><div>BPO Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/cloud-services"><div>Cloud Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/infrastructure-services"><div>Infrastructure Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/managed-services"><div>Managed Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/project-management-offerings/"><div>Project Management Offerings</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/recruitement-hcm"><div>RPO / HCM Services</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/software-sales-renewals"><div>Software Sales and Renewals</div></a></li>
												<li><a href="http://www.miraclesoft.com/services/quality-assurance/"><div>Testing and QA Services</div></a></li>
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-6">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/technologies/"><div>Technologies</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/technologies/api/"><div>API Management</div></a></li>
												<li><a href="http://www.miraclesoft.com/technologies/iot/"><div>Internet of things</div></a></li>
												<li><a href="http://www.miraclesoft.com/technologies/business-process-management"><div>Business Process Management</div></a></li>
												<li><a href="http://www.miraclesoft.com/technologies/data-analytics"><div>Big Data, BI and Analytics Offerings</div></a></li>
												<li><a href="http://www.miraclesoft.com/technologies/digital-experience-commerence"><div>Digital Experience</div></a></li>
												<li><a href="http://www.miraclesoft.com/technologies/b2b/"><div>File Transfer and B2B/EDI</div></a></li>
								             	<li><a href="http://www.miraclesoft.com/partnerships/microsoft/"><div>Microsoft Technology</div></a></li>
								             <li><a href="http://www.miraclesoft.com/technologies/oracle-middleware"><div>Oracle Middleware</div></a></li>
								            <li><a href="http://www.miraclesoft.com/technologies/sap-services"><div>SAP Services</div></a></li>
								           <li><a href="http://www.miraclesoft.com/technologies/application-integration"><div>SOA, Connectivity and Middleware</div></a></li>
								           
								             													
											</ul>
										</li>
									</ul>
							
									
								</div>
							</li>
								<li class="mega-menu"><a href="http://www.miraclesoft.com/library/"><div>Library</div></a></li>
							<li class="mega-menu"><a href="http://www.miraclesoft.com/careers/"><div>Careers</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="#"><div>Careers</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/careers/benefits-india"><div>Careers in India</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/benefits-us"><div>Careers in USA</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/life-at-miracle"><div>Life at Miracle</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/open-positions"><div>Open Positions</div></a></li>
												
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/careers/fresher-oppurtunity"><div>Fresher's</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/careers/career-growth"><div>Career Growth Plan</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/faq"><div>Frequently Asked Questions</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/job-fairs-drives"><div>Job Fairs and Drives</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/fresher-oppurtunity"><div>Opportunities</div></a></li>
																				
											</ul>
										</li>
									</ul>
									<ul class="mega-menu-column col-md-4">
										<li class="mega-menu-title"><a href="http://www.miraclesoft.com/careers/mile"><div>Programs</div></a>
											<ul>
												<li><a href="http://www.miraclesoft.com/careers/itg"><div>IT Gurukulam</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/mile"><div>MILE - Leadership Institute</div></a></li>
												<li><a href="http://www.miraclesoft.com/careers/refresh-america"><div>Refresh America</div></a></li>
												
											</ul>
										</li>
									</ul>
									
									
								</div>
							</li>
								<li class="mega-menu "><a href="http://www.miraclesoft.com/events/"><div>Events</div></a>
								<ul class="event-head" style="left:80%;position:absolute;">
								<li><a href="http://www.miraclesoft.com/events/"><div>upcoming Events</div></a></li>
								<li><a href="http://www.miraclesoft.com/events/recent"><div>Recent Events</div></a></li>
								<li><a href="http://www.miraclesoft.com/gallery/"><div>Gallery</div></a></li>
								</ul>
								</li>
						
							                      </li>
							               
					                       	</ul>

					
						<div id="top-cart" style="margin-left:20px;">
						<div class="head">
							<a href="#" id="top-cart-trigger"><i class="fa fa-user"></i></a>
							</div>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Sign In</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="signin-input">
									<label for="template-contactform-email">Username </label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>
								
								<div class="signin-input">
									<label for="template-contactform-phone">Password</label>
									<input type="password" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>
								
									</div>
								<div class="col_full">
								<br>	<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin signin-input">Submit</button> <br>
								</div>
								</div>
								<div>
									
								</div>
								
							</div>
						</div>
					
					</nav><!-- #primary-menu end -->
				</div>
			</div>
			</section>
		</header>
  

        <section class="container">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-7 text-left">
                    <h1 class="heavy"><!-- Survey Form Title Goes Here -->
                        Miracle City Employee Bus Interest Form
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li class="active">Survey Form
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="noMarginTop">
            <div class="row">
                <div class="col-sm-5">
                   <p class="greyText heavy">Created on July 21st, 2015</p><!-- Created on <Creation-Date>-->
                   <div class="row noMarginTop noMarginBottom">
                        <div class="col-sm-5 noMarginBottom"><hr class="noMargin"></div>
                        <div class="col-sm-7"></div>
                   </div>
                   <!-- Custom Text entered by form creator -->
                   <p class="methodText">We are looking to find out if anybody is interested in boarding daily up-and-down buses to-and-from Miracle City. Anybody who is interested in this bus service, please fill in the adjacent form so that we can make a decision based on the data. </p><!-- Job Description -->
                   <p class="methodText">We are looking to find out if anybody is interested in boarding daily up-and-down buses to-and-from Miracle City. Anybody who is interested in this bus service, please fill in the adjacent form so that we can make a decision based on the data. </p><!-- Job Description -->
                   <!-- Disclaimer text common for all Surveys -->
                   <p class="greyText methodText">All form data entered within the above survey form is stored in an internal secure Miracle Data Store and any distribution of this data externally will be considered illegal. If you would like to contact support regarding the survey form please contact us at hubble@miraclesoft.com (or) marketing@miraclesoft.com</p>
                   <p class="greyText"><i>Created by clokam</i></p><!-- Created by <Creator Hubble ID> -->
                </div>
                <div class="col-sm-7">
                    <form action="#" enctype="multipart/form-data" id="myForm" method="post" name="myForm">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input class="form-control" id="firstname" name="firstname" onchange="fieldLengthValidator(this);" placeholder="First Name" required="required" tabindex="1" type="text">
                            </div>
                            </div>
                        <div class="col-sm-6">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input class="form-control" id="firstname" name="firstname" onchange="fieldLengthValidator(this);" placeholder="First Name" required="required" tabindex="1" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row noMarginTop">
                        <div class="col-sm-6">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input type="checkbox" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Other" >&nbsp;&nbsp;Other
                            </div>
                            </div>
                        <div class="col-sm-6">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input  type="radio" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="radio" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="radio" name="Sex" value="Other" >&nbsp;&nbsp;Other
                            </div>
                        </div>
                    </div>
                    <div class="row noMarginTop">
                        <div class="col-sm-12">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input type="checkbox" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Other" >&nbsp;&nbsp;Other
                                &nbsp;&nbsp;&nbsp;&nbsp;<input  type="checkbox" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Other" >&nbsp;&nbsp;Other                            
                            </div>
                        </div>
                    </div>
                    <div class="row noMarginTop">
                        <div class="col-sm-12">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input type="radio" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="radio" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="radio" name="Sex" value="Other" unchecked >&nbsp;&nbsp;Other
                                &nbsp;&nbsp;&nbsp;&nbsp;<input  type="radio" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="radio" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="radio" name="Sex" value="Other" >&nbsp;&nbsp;Other                            
                            </div>
                        </div>
                    </div>
                    <div class="row noMarginTop">
                        <div class="col-sm-12">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <input class="form-control"id="email-first" type="text" placeholdercsholder="Input Text">
                            </div>
                        </div>
                    </div>
                    <div class="row noMarginTop">
                        <div class="col-sm-12">
                            <p class="greyText heavy">Please enter your full name</p>
                            <div class="form-group">
                                <textarea rows="4"  class="form-control"  placeholdercsholder="Input Text">
                                </textarea>    
                            </div>
                        </div>
                    </div>
                    <div class="row noMarginTop">
                        
                        <div class="col-sm-12">
                            <p class="greyText heavy">Please enter your full name</p>
                            </div>
                            <div class="col-sm-12">
                           <link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>
<div class="container">
  <div class="slider">
  <input type = "range" min="0" max="100" style="width:290px;" onchange="rangevalue.value=value"/>
	<output id="rangevalue">50</output>
  </div>
  </div>
                        </div>
                       
                    </div>
                    <div class="row noMarginTop">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-danger btn-file">
                                        Resume<input class="form-control" tabindex="6" onchange="putFileName()" multiple="" name="fileToUpload" id="fileToUpload" required="required" type="file">
                                    </span>
                                </span>
                                <input class="form-control col-sm-4" id="fileDestination" name="fileDestination" required="required" placeholder="Upload" readonly="" type="text">
                            </div>
                        </div>
                        
                         
                            <div class="form-group">
                                <span class="btn btn-success btn-file col-sm-6 submit-last">Submit</span>
                            </div>
                        
                    </div>
                    </form>
                    
                </div>
            </div><br>
        </section>
        <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row"> <br>
          
                <div class="col-md-4 col-sm-6">
                    <h4 class="noMargin">Recent Articles</h4>
                    <div class="row">
                        <div class="col-sm-3 noMargin">
                            <hr>
                        </div>
                    </div>
                    <a class="noMargin" href="../library/scc-product-brief.php"><strong>Enhanced MFT Visibility and Control</strong><br>with IBM Sterling Control Center</a>
                    <div class="greyText noMargin">
                        B2B Integration and MFT
                    </div>
                    <br>
                    <a class="noMargin" href="../library/faq-mq.php"><strong>The 10 things that you need to know</strong><br>about IBM's new MQ Appliance</a>
                    <div class="greyText noMargin">
                        SOA and Connectivity
                    </div>
                    <br>
                    <a class="noMargin" href="../why/sstory7.php"><strong>Enhanced Visibility and Control</strong><br>for Global Food Distributor</a>
                    <div class="greyText noMargin">
                        B2B Integration and MFT
                    </div>
                </div>
                   <!--/.col-md-4-->
                   <div class="col-md-2 col-sm-6">
                    <h4 class="noMargin">Team Miracle</h4>
                    <div class="row">
                        <div class="col-sm-5 noMargin">
                            <hr>
                        </div>
                    </div>
                    <div>
                        <ul class="arrow">
                            <li><a href="../">Home</a></li>
                            <li><a href="../company/">The Company</a></li>
                            <li><a href="../company/partnerships.php">Partnerships</a></li>
                            <li><a href="../services/">Our Services</a></li>
                            <li><a href="../coming-soon.php">Library</a></li>
                            <li><a href="../contact/locations.php">Locations</a></li>
                            <li><a href="../privacy.php">Privacy Policy</a></li>
                            <li><a href="../gallery/">Memory Gallery</a></li>
                            <li><a href="../contact/">Contact Us</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-2-->
                <div class="col-md-3 col-sm-6">
                    <h4 class="noMargin">Opportunities</h4>
                    <div class="row">
                        <div class="col-sm-3 noMargin">
                            <hr>
                        </div>
                    </div>
                    <div>
                        <div class="media">
                            <div class="media-body">
                                <span class="media-heading"><a href="../careers/refresh-america.php">Refresh America<br/>Ph : (248)-233-1100</a></span>
                                <small class="muted"><a href="../careers/jobs-us.php">Multiple Positions Available - USA</a></small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <span class="media-heading"><a href="../careers/itg.php">IT Gurukulam<br/>Ph : +91-(891)-662-3555</a></span>
                                <small class="muted"><a href="../careers/jobs-india.php">Hiring 2017 Freshers - India</a></small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <span class="media-heading"><a href="../careers/">Opportunities<br/>Ph : (248)-233-1175</a></span>
                            </div>
                        </div>
                    </div>  
                </div><!--/.col-md-3-->
                   <div class="col-md-3 col-sm-6">
                    <h4 class="noMargin">Corporate HQ</h4>
                    <div class="row">
                        <div class="col-sm-3 noMargin">
                            <hr>
                        </div>
                    </div>
                    <address>
                        <strong>Miracle Software Systems, Inc.</strong><br>
                        Global Headquarters<br>
                        45625 Grand River Avenue<br>
                        Novi, MI - USA(48374)<br>
                        Ph: (248)-233-1100<br>
                        E : info@miraclesoft.com
                    </address>
                    <a href="../contact/"><button type="button" class="btn btn-primary btn-md">Get in Touch</button></a>
                </div> <!--/.col-md-3-->
          
            </div>
        </div></br>
                 <section class="chat-box">
        <div class="container ">
            <div  class="row chat-window col-xs-5 col-md-3 rude" id="chat_window_1" style="margin-right:-1600px; margin-top:-75px;" >
                <div class="col-xs-12 col-md-12">
        	        <div class="panel panel-default">
                        <div class="panel-heading top-bar">
                            <div class="col-md-12 col-xs-12">
                                <img class="img-responsive chat-image" src="Mira.svg" alt="mira" style="height:35px;margin-left:-16px;"/>
                                   <center> <h3 class="panel-title"><strong>Say Hi to Mira!</strong></h3></center>
                            </div>
                        </div>
                    <div class="panel-body msg_container_base">
                         <div class="chat-container" id="chat-container">
                            <form class="form-horizontal" role="form"><br>
	                           <div class="form-group">
		                           <div class="col-sm-12">
	                                  <input type="name" class="form-control" id="name" placeholder="Name" >
		                           </div>
	                           </div>
	                           <div class="form-group">
		                            <div class="col-sm-12">
	                                    <input type="text" class="form-control" placeholder="Email Id">
		                            </div>
	                           </div>
	                           <div class="form-group">
		                           <div class="col-sm-12">
	                                   <input type="text" class="form-control" placeholder="Designation">
		                           </div>
	                           </div>
	                           <div class="form-group">
			                       <div class="col-sm-12">
	                                   <input type="text" class="form-control" placeholder="Organisation">
		                           </div>
	                           </div><br>
	    	                   <div class="form-group">
	                               <div class="col-sm-12">
	                                   <button onclick="ra(); return false;" class="col-sm-12 btn btn-success btnsub" id="play">Submit</button>
	                               </div>
	                           </div>
	                    </form>
                    </div>
                  <div class="pannel-out" id="pannel-out">
            <style>
                .pannel-out{
                     display:none;   
                }
                .pannel-chat{
                     display:none;   
                }
                .left-time{float: left;  margin-left: 22%;width: auto;top: -11px;}
                .left-time h5{font-size:9px!important;color:#333!important;}
                .time { width: auto; float: right; margin-right: 15px;}
               .time h5{font-size:9px!important;color: #333 !important;}
               .chatbox{padding-bottom:0px!important;}
            </style>
                    <div class="msg_container base_sent">
                        <div class="">
                            <div class="messages msg_sent">
                                <p>Hey Mira! how are you doing ? </p>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-2 avatar time">
                          <h5> Yesterday! 6:23 PM</h5>
                        </div>
                    </div>
                    <div class="msg_container base_sent">
                        <div class="">
                            <div class="messages msg_sent">
                                <p>How can you help us ?  </p>
                            </div>
                        </div>
                          <div class="col-md-2 col-xs-2 avatar time">
                          <h5>Yesterday! 6:23 PM</h5>
                        </div>
                    </div>
                    <div class="row msg_container base_receive">
                         <div class="col-md-2 col-xs-2 avatar">
                            <img src="Mira.svg" class="img-responsive chat-image " style="margin-left:-4px;">
                        </div>
                        <div class="">
                            <div class="messages msg_receive">
                                <p>Yeah I'm fine how about you.</p>
                            </div>
                        </div>
                      <div class="col-md-2 col-xs-2 avatar left-time">
                          <h5 >Yesterday! 6:23 PM</h5>
                        </div>
                    </div>
                     <div class="row msg_container base_receive">
                          <div class="col-md-2 col-xs-2 avatar">
                            <img src="Mira.svg" class="img-responsive chat-image" style="margin-left:-4px;">
                        </div>
                        <div class="">
                            <div class="messages msg_receive">
                                 <p>I'm Miracle's innovation research associate a bot that helps to explore our new technologies 
                                 <span><button type="button" class="btn btn-warning" style="padding: 0px 5px!important;margin-top: 6px;color: #232527!important;font-size:12px;font-weight:600;">Click Here</button></span>
                                 </p>
                            </div>
                        </div>
                       <div class="col-md-2 col-xs-2 avatar left-time">
                          <h5>Today! 6:23 PM</h5>
                        </div>
                    </div>
                    <div class="msg_container base_sent">
                        <div class="">
                            <div class="messages msg_sent">
                                <p>Ohh! thats really interesting ! </p>
                            </div>
                        </div>
                         <div class="col-md-2 col-xs-2 avatar time">
                          <h5>Today! 6:23 PM</h5>
                        </div>
                    </div>
                    <div class="row msg_container base_receive">
                         <div class="col-md-2 col-xs-2 avatar">
                            <img src="Mira.svg" class="img-responsive chat-image " style="margin-left:-4px;">
                        </div>
                        <div class="">
                            <div class="messages msg_receive">
                               <div class="typing-indicator">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                            </div>
  
                            </div>
                        </div>
                         <div class="col-md-2 col-xs-2 avatar left-time">
                          <h5 style="margin-left:20px;">Just Now</h5>
                        </div>
                    </div>
                </div>
                </div>
                <div class="panel-footer pannel-chat" id="pannel-chat">
                    <div class="input-group">
                        <textarea class="write-message"  id="cin" cols="1" rows="1" placeholder="Chat with MIRA"></textarea>
                            <span class="input-group-btn">
                                <i class="icon send fa fa-paper-plane-o clickable " style="margin-top: -4px;" aria-hidden="true"></i>
                            </span>
                    </div>
                </div>
    		</div>
        </div>
    </div>
        <div onclick="viewSomething()" class="try" style="width:130px!important;">
          <span class="textual"><span><i class="fa fa-commenting fa-1x" aria-hidden="true"></i></span><strong>  Ask MIRA! </strong>
        </div>
    </div>
</section>
    </section>
    
     <footer id="footer" class="midnight-blue dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 <a target="_blank" href="http://www.miraclesoft.com" title="Copyright">Miracle Software Systems, Inc.</a>
                </div>
                <div class="col-sm-6">
                    <ul class="socialHover" style="padding-left:17em;">
                        <a class="btn btn-social btn-facebook" href="https://www.facebook.com/miracle45625"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="https://plus.google.com/105262074634409319991/"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="https://twitter.com/Team_MSS"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="https://www.linkedin.com/company/miracle-software-systems-inc"><i class="icon-linkedin"></i></a>  <a class="btn btn-social btn-youtube" href="https://www.youtube.com/c/Team_MSS"><i class="icon-youtube-play"></i></a> <!-- <a class="icomoon icon-flickr-4" href="https://www.flickr.com/photos/team_miracle"><img width="30px" height="30px" src="../images/icons/flikr.png"></a> -->
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
   
    </footer>
        
        <!--Custom Code Starts--Author- Siva-->
        
    
	<script type='text/javascript' src="../booststrap/dependencies/js/modernizr.js"></script>
        <!--Custom Code ends-->
   <script>
var clicks = 0;
$('.try').click(function() {
    
    if (clicks == 0){
          $('#chat_window_1').animate({"margin-right": '-12'});
       $('.textual').html("<span class='fa fa-fw fa-times chati'></span>");
  $(this).animate({
    width: "40px",
    backgroundColor: "#333"
  },300); 
   $(".try").css("background-color", "#333");
   clicks++;
        
    } else if(clicks == 1){
        $('#chat_window_1').animate({"margin-right": '-1600'});
        $('.textual').html('<span class="fa fa-commenting fa-1x"></span><strong style="font-family:Lato, sans-serif !important;">&nbsp;Ask MIRA!</strong><span class="badge badge-notify">3</span>');
         $(this).animate({
    width: "130px",
    backgroundColor: "#ef4048"
  },300);
   $(".try").css("background-color", "#ef4048");
  clicks--;
  
    }
});

$('.btnsub').click(function() {
        $("#chat-container").hide('slow');
         $("#pannel-out").show('slow');
         $("#pannel-chat").show('slow');
    });
    
function ra(){
    $("#notice").hide('slow');
}

</script>
  	<script type="text/javascript" src="../../NewFolder/js/jquery.js"></script>
	<script type="text/javascript" src="../../NewFolder/js/plugins.js"></script>
		<script type="text/javascript" src="../../NewFolder/js/rajfunction.js"></script>   
    </body>
</html>