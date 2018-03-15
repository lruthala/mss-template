<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>Survey Form | Miracle</title>
        <!--css files-->
          <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
         <!--<link href="../css/default.css" rel="stylesheet" type="text/css">-->
        <!--<link href="../css/component.css" rel="stylesheet" type="text/css">-->
        <!--<script src="../js/modernizr.custom.js"></script>-->
        <!--<script src="../js/fileinput.js"></script>-->
        <!--<link href="../boostrap-slider/css/boostrap-slider.css" rel="stylesheet">-->
        <!--<script src="../js/custom.js" type="text/javascript"></script>-->
        <!-- <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">-->
        <!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
        <!--<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>-->
        <!--<link href="/resources/demos/style.css" rel="stylesheet">-->
        <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
        <!--<link href="../images/favicon.ico" rel="shortcut icon">-->
        <link rel="script">
         	
        <!--Custom css starts here-->
        <style>
            .msg_receive{margin-left:40px;}
            .panel{box-shadow: 0px 0px 20px 1px rgba(0,0,0,0.2);border-radius:12px;}
            .chat-box{height:400px;position: fixed;bottom: 0;font-family: Lato, sans-serif !important;}
            .msg {margin-right: -24%;}
            .chat-window{right:0;position:fixed;float:right;margin-left:10px;}
            .chat-window > div > .panel{border-radius: 5px 5px 0 0;}
            .icon_minim{padding:2px 10px;}
            .msg_container_base{background: #ececec;margin: 0;padding: 0 10px 10px;max-height:300px;overflow-x:hidden;}
            .top-bar {background: #666;color: white;padding: 10px;position: relative;overflow: hidden;}
            .msg_sent{margin-right:0;background-color:#0d416b!important;color:#ffffff !important;border-radius: 15px 5px 5px !important;}
            .messages  {background: #00aae7;color:#ffffff !important;padding: 5px;border-radius: 5px 5px 15px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);max-width:100%;}
            .messages .msg_sent{padding:15%;} 
            .messages > p {margin: 0 7px;border-radius: 0px;font-size: 14px;}
            .messages > time {font-size: 11px;color: #ccc;}
            .msg_container {padding: 10px;overflow: hidden;display: table;}
            .chat-image {display: block;background-image: none;background-repeat: repeat;background-position-x: 0%;background-position-y: 0%;background-size: auto auto;-moz-border-radius: 50px;-webkit-border-radius: 50px;background-position: center;background-size: cover;background-repeat: no-repeat;}
            .avatar {position: relative;padding:0;margin-right:17px;}
            .panel-default >.panel-heading {color:#ffffff ;background-color:#232527;height:55px;border-color: transparent;margin-top: -1px;margin-left: -1px;border-radius:10px 10px 0px 0px;}
            .base_sent {padding-left: 33%;width: 103%;}
            .msg_sent > time{float: right;}
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
            .base_receive {padding-right: 33%;margin-left: -10px;}
            .panel-title{margin-top:-24px;font-size:17px;position : absolute;margin-left: 25px;}
            textarea:focus, input:focus{outline: none;}
            .try {cursor: pointer;text-align: center;width: 10%;height: 40px;background-color:#ef4048;border-radius: 38px;padding-top: 8px;position: fixed;bottom: 3%;right:1%;cursor: pointer;font-size:17px;line-height:1.52 !important;}
            .try .fa {color: #ffffff;font-size: 18px;}
            .try .textual {font-family: 'Lato', sans-serif !important;color: #fff;text-align: center;}
            .badge-notify{background:#232527;position:absolute;right:0;top:-7px;}
            #field1::-webkit-input-placeholder { color:#8c8c8c;font-size:15px !important;}
            #field1::-moz-placeholder { color:#8c8c8c;font-size:15px !important;}
            .rocky{-webkit-animation-name:holder;-webkit-animation-duration:0.4s;animation-name: holder;animation-duration: 0.4s;}    
            @keyframes holder {from{margin-right:-1600px;}to:{margin-right:-10px;}}
            -webkit-@keyframes holder {from{margin-right:-1600px;}to:{margin-right:-10px;}}
            textarea {resize: none;border:none !important;width:100%}
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
        </style>
   </head>
    <body>
        <?php include '../headerm.php';?>
            <section class="container">
            <br>
            <br>
            <br>
            <br>
                <div class="row">
                    <div class="col-sm-7 text-left">
                        <h1 class="heavy">Miracle City Employee Bus Interest Form</h1>
                    </div>
                    <div class="col-sm-5 text-right">
                        <ul class="breadcrumb pull-right">
                            <li><a href="../">Home</a></li>
                            <li class="active">Survey Form</li>
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
                                <p class="methodText">We are looking to find out if anybody is interested in boarding daily up-and-down buses to-and-from Miracle City. Anybody who is interested in this bus service, please fill in the adjacent form so that we can make a decision based on the data. </p><!-- Job Description -->
                                <p class="methodText">We are looking to find out if anybody is interested in boarding daily up-and-down buses to-and-from Miracle City. Anybody who is interested in this bus service, please fill in the adjacent form so that we can make a decision based on the data. </p><!-- Job Description -->
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
                                                <input class="form-control" type="text" placeholdercsholder="Input Text">
                                            </div>
                                    </div>
                                </div>
                                <div class="row noMarginTop">
                                    <div class="col-sm-12">
                                        <p class="greyText heavy">Please enter your full name</p>
                                            <div class="form-group">
                                                <textarea rows="4"  class="form-control"  placeholdercsholder="Input Text"></textarea>    
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
                                                <span class="btn btn-danger btn-file">Resume<input class="form-control" tabindex="6" onchange="putFileName()" multiple="" name="fileToUpload" id="fileToUpload" required="required" type="file"></span>
                                            </span>
                                            <input class="form-control col-sm-4" id="fileDestination" name="fileDestination" required="required" placeholder="Upload" readonly="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <span class="btn btn-success btn-file col-sm-6">Submit
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
                            <div class="greyText noMargin">B2B Integration and MFT</div>
                                <br>
                                <a class="noMargin" href="../library/faq-mq.php"><strong>The 10 things that you need to know</strong><br>about IBM's new MQ Appliance</a>
                                    <div class="greyText noMargin">SOA and Connectivity</div>
                                <br>
                                <a class="noMargin" href="../why/sstory7.php"><strong>Enhanced Visibility and Control</strong><br>for Global Food Distributor</a>
                                    <div class="greyText noMargin">B2B Integration and MFT</div>
                            </div>
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
                        </div>
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
                    </div>
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
                    </div>
                </div>
        </div></br>

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
<!--       	<script type='text/javascript' src="../booststrap/dependencies/js/modernizr.js"></script>-->
<!--       	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->


    </body>
</html>
        