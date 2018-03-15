 <html>
 <head>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/font-awesome.min.css" rel="stylesheet">
      <link href="../css/main.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../css/component.css" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
      <link href="/css/themes.css" rel="stylesheet">
      <link rel="shortcut icon" href="../images/favicon.ico">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     <style>

.panel{
  box-shadow: 0px 0px 20px 1px rgba(0,0,0,0.2);
  border-radius:-2px;
    border-top-color: transparent !important;
    border-top-left-radius: 11px !important;
    border-top-right-radius: 11px!important;
}
.chat-window{
    right:0 !important;
    position:fixed !important;
    margin-left:10px;
    overflow-y:scroll;
    font-family: Lato, sans-serif !important;
   bottom:0;
   margin-bottom:45px;
   z-index: 1;
}
.msg {
    margin-right: -24%;
}
.chat-window > div > .panel1{
    border-radius: 5px 5px 0 0;
}
.icon_minim{
    padding:2px 10px;
}
.msg_container_base{
  background: #ececec;
  margin: 0;
  padding: 0 10px 10px!important;;
  max-height:300px;
  overflow-x:hidden;
  height:300px;
}

.top-bar {
  background: #666;
  color: white;
  padding: 10px;
  position: relative;
  overflow: hidden;
}
.msg_sent > p {
    background: #0d416b;
    color: #fff;
    margin: 0px -31px;
    border-radius: 5px 5px 15px;
    font-size: 14px;
    padding: 6px 10px;
     margin-right: -2px;
    float: right;
}


.messages > time {
    font-size: 11px;
    color: #ccc;
}
.msg_container {
    padding: 6px;
    overflow: hidden;
    display: table;
}
.chat-image {
       display: block;
       background-image: none;
        background-repeat: repeat;
        background-position-x: 0%;
        background-position-y: 0%;
        background-size: auto auto;
    -moz-border-radius: 50px;
    -webkit-border-radius: 50px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}
.avatar {
    padding: 0px;
    height: 12px!important;
    width: 35px!important;
    top: -3px;
}

.panel-default >.panel-heading {
    color:#ffffff!important ;
    background-color:#232527!important;
    height:55px;
    border-color: transparent;
    margin-top: -1px;
    margin-left: -1px;
    border-radius:10px 10px 0px 0px;
}

.base_sent {
    padding-left: 33%;
    width: 103%;
}

.msg_sent > time{
    float: right;
}

.msg_container_base::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

.msg_container_base::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

.msg_container_base::-webkit-scrollbar-thumb
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}

.btn-group.dropup{
    position:fixed;
    left:0px;
    bottom:0;
}
.panel-footer .send {
    color: #8c8c8c;
    background-color: transparent;
    padding: 13px 12px 12px 11px;
    border-radius: 50px;
    font-size: 13pt;
    margin-right: -10px;
}

 .panel-footer .name {
  margin: 0 0 0 20px;
  text-transform: uppercase;
  font-size: 13pt;
  color:#515151;
}

.panel-footer .right {
  position: absolute;
  right: 40px;
}
.write-message {
    border: none !important;
    width: 95%;
    padding: 3px 1px;
    white-space: normal;
    word-wrap: break-word;
    font-size: 15px;
    overflow-x: hidden;
    background: transparent;
    margin-top: 3px;
}

.panel-footer *::-webkit-input-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
}
.panel-footer input *:-moz-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
}
.panel-footer input *::-moz-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
  margin-left:5px;
}
.panel-footer input *:-ms-input-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
}
.panel-footer {
    padding: 0px 18px;
    border-top: 0px solid transparent;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    background-color: #ffffff;
    height: 40px;
}

.clickable {
    background: #232527;
    display: inline-block;
    padding: 9px 11px;
    border-radius: 20px;
    cursor: pointer;
    margin-top: -28px;
    color: #ffffff;
    margin-right: -15px;
    font-size: 17px;
}
 
.panel-title{
    margin-top:-26px!important;
    font-size:17px !important;
    position : absolute;
    margin-left: 25px;
    color:#ffffff!important}
    

.try {
  cursor: pointer;
  text-align: center;
  width: 10%;
  height: 40px;
  background-color:#ef4048;
  border-radius: 38px;
  padding-top: 7px;
  position:fixed;
  bottom: 0; 
  right:0;
  font-size:17px;
  line-height:1.52 !important;
  margin-right: 28px;
}
.try .fa {
  color: #ffffff;
  font-size: 18px;
  
}
.try .textual {
  font-family: 'Lato', sans-serif !important;
  color: #fff;
  text-align: center;
}
 .badge {
    min-width: 23px!important;
    padding: 5px 7px!important;
    border-radius:12px;
     background-color:#232527!important;
}
.badge-notify{
   background:#232527;
   position:absolute;
   right:0;
   top:-10px;
  }

  #field1::-webkit-input-placeholder { color:#8c8c8c;
                 font-size:15px !important;
             }
             #field1::-moz-placeholder { color:#8c8c8c;
                 font-size:15px !important;
             }
 .rocky{
        -webkit-animation-name:holder;
        -webkit-animation-duration:0.4s;
        animation-name: holder;
        animation-duration: 0.4s;
    }
    
    @keyframes holder {
        from{margin-right:-1600px;}
        to:{margin-right:-10px;}
    }
    
    -webkit-@keyframes holder {
        from{margin-right:-1600px;}
        to:{margin-right:-10px;}
    }

.form-control:focus {
    border-color: #0d416b!important;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0), 0 0 8px rgba(0,0,0,0) !important; 
}#cin::-webkit-scrollbar-thumb{

	box-shadow: 1px 1px 1px 1px grey;
	background-color: #232527;
}
#cin::-webkit-scrollbar {
   width: 2px;
}

#cin::-webkit-scrollbar-track {
   -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
   border-radius: 10px;
}

#cin::-webkit-scrollbar-thumb {
   border-radius: 10px;
   -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}

scrollbar {
/*  clear useragent default style*/
   -moz-appearance: none !important;
}
/* buttons at two ends */
scrollbarbutton {
   -moz-appearance: none !important;
}
/* the sliding part*/
thumb{
   -moz-appearance: none !important;
}
scrollcorner {
   -moz-appearance: none !important;
   resize:both;
}
/* vertical or horizontal */
scrollbar[orient="vertical"] {
    color:silver;
}
.msg_receive > p {
    background: #00aae7;
    color: #fff;
    margin: 0px 35px;
    border-radius: 5px 5px 15px;
    font-size: 14px;
    padding: 6px 10px;
    margin-right: 9px;
}
 textarea {
    resize: none;
    border:none !important;
    width:100%
}
textarea:focus, input:focus{
    outline: none;
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
    margin-left: 46px;
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
 .chat-height {
    margin-bottom: 40px!important;
 }
body{
    overflow-x:hidden;
}
.item blockquote img, #pricing-table .plan li.plan-price, .row > div {
    margin-bottom: 0px!important;
}
.btn-social {
padding: 8px 9px;
border-radius:28px;
}
.btn-info:hover {
color: #ffffff;
background-color: #0d416b!important;
border-color: #0d416b!important;
}



</style> 
 </head>
<!-- Bottom Part -->


 <div class="container">

    <div  class="row chat-window col-xs-5 col-md-3 rude chat-box" id="chat_window_1" style="margin-right:-1600px; margin-top:-75px;" >
        <div class="col-xs-12 col-md-12" style="margin-bottom: 27px;">
        	<div class="panel panel-default ">
                <div class="panel-heading top-bar">
                    <div class="col-md-12 col-xs-12">
                        <img class="img-responsive chat-image" src="../experiment/Mira.svg" alt="mira" style="height:35px;margin-left:-22px;"/>
                       <center> <h3 class="panel-title"><strong>Say Hi to Mira!</strong></h3></center>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                 <div class="chat-container" id="chat-container">
     <form class="form-horizontal" role="form"><br>
	   <div class="form-group">
		<div class="col-sm-12">
	      <input type="name" class="form-control" id="name" placeholder="Name" style="border-color:#ef4048 !important;">
	      <p style="color:#ef4048">Please enter the name</p>
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
	     <button onclick="ra(); return false;" class="col-sm-12 btn btn-info  chat-btn btnsub" style="background-color:#0d416be6;border-color:#0d416b;color:#ffffff;" id="play">Submit</button>
	     <!--<button class="btn btn-default btnsub">Submit</button>-->
	   </div>
	   </div>
	</form>
</div>
      <!-- buttons-->
   
      
        <div class="pannel-out panel-height" id="pannel-out" style="margin-bottom: 15px;">
            <style>
                .pannel-out{
                     display:none;   
                }
                .pannel-chat{
                     display:none;   
                }
                .left-time {float:left!important; margin-left: 11%; width: auto!important;}
                .left-time h5{font-size:9px!important;color:#333!important;}
                .time { width: auto!important; float: right!important; }
               .time h5{font-size:9px!important;color:#333!important}
               .chatbox{padding-bottom:0px!important;}
            </style>
                    <div class="msg_container base_sent">
                        <div class="">
                            <div class="messages msg_sent">
                                <p>Hey Mira! how are you doing ? </p>
                            </div>
                        </div>
                       <div class="col-md-2 col-xs-2  time">
                          <h5> Yesterday | 6:23 PM</h5>
                        </div>
                    </div>
                    <div class="msg_container base_sent">
                        <div class="">
                            <div class="messages msg_sent">
                                <p>How can you help us ?  </p>
                            </div>
                        </div>
                          <div class="col-md-2 col-xs-2  time">
                          <h5>6:23 PM</h5>
                        </div>
                    </div>
                    <div class="row msg_container base_receive">
                         <div class="col-md-2 col-xs-2 avatar">
                            <img src="../experiment/Mira.svg" class="img-responsive chat-image">
                        </div>
                        <div class="">
                            <div class="messages msg_receive">
                                <p>Yeah I'm fine how about you.</p>
                            </div>
                        </div>
                      <div class="col-md-2 col-xs-2  left-time">
                          <h5> 6:23 PM</h5>
                        </div>
                    </div>
                     <div class="row msg_container base_receive">
                          <div class="col-md-2 col-xs-2 avatar">
                            <img src="../experiment/Mira.svg" class="img-responsive chat-image">
                        </div>
                        <div class="">
                            <div class="messages msg_receive">
                                 <p>I'm Miracle's innovation research associate a bot that helps to explore our new technologies 
                                 <span><button type="button" class="btn btn-danger" style="padding: 0px 5px!important;margin-top: 6px;color: #ffffff!important;font-size:12px;font-weight:600;">Click Here</button></span>
                                 </p>
                            </div>
                        </div>
                       <div class="col-md-2 col-xs-2 left-time">
                          <h5>Today | 6:23 PM</h5>
                        </div>
                    </div>
                <div class="msg_container base_sent">
                        <div class="">
                            <div class="messages msg_sent">
                                <p>Ohh! thats really interesting ! </p>
                            </div>
                        </div>
                         <div class="col-md-2 col-xs-2  time">
                          <h5>6:23 PM</h5>
                        </div>
                    </div>
                    <div class="row msg_container base_receive">
                         <div class="col-md-2 col-xs-2 avatar">
                            <img src="../experiment/Mira.svg" class="img-responsive chat-image">
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
                         <div class="col-md-2 col-xs-2  left-time">
                          <h5 style="margin-left:19px;">Just Now</h5>
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
        $('.textual').html('<span class="fa fa-commenting fa-1x"></span><strong style="font-family:Lato, sans-serif !important;width:130px!important">&nbsp;Ask MIRA!</strong><span class="badge badge-notify">3</span>');
         $(this).animate({
    width: "130px",
    // backgroundColor: "#000000"
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
    // document.getElementById('pannel-out').style.display='block';
    // document.getElementById('chat-container').style.display='none';
    // document.getElementById('pannel-chat').style.display='block';
}

</script>
    </section><!--/#bottom-->
    <!--
    <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
              ga('create', 'UA-57869278-1', 'auto');
              ga('send', 'pageview');
        
    </script>-->
    <footer id="footer" class="midnight-blue dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 <a target="_blank" href="http://www.miraclesoft.com" title="Copyright">Miracle Software Systems, Inc.</a>
                </div>
                <div class="col-sm-6">
                    <ul class="socialHover" id="social-icons" style="padding-left: 50%;">
                        <a class="btn btn-social btn-facebook" href="https://www.facebook.com/miracle45625"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="https://plus.google.com/105262074634409319991/"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="https://twitter.com/Team_MSS"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="https://www.linkedin.com/company/miracle-software-systems-inc"><i class="icon-linkedin"></i></a>  <a class="btn btn-social btn-youtube" href="https://www.youtube.com/c/Team_MSS"><i class="icon-youtube-play"></i></a> <!-- <a class="icomoon icon-flickr-4" href="https://www.flickr.com/photos/team_miracle"><img width="30px" height="30px" src="../images/icons/flikr.png"></a> -->
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>

    </footer><!--/#footer-->
    </html>