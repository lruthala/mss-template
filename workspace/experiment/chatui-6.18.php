<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link href="css/main.css" rel="stylesheet prefetch" type="text/css">
        <link href="css/animate.css" rel="stylesheet prefetch" type="text/css">
        <link href="css/default.css" rel="stylesheet" type="text/css">
        <link href="css/component.css" rel="stylesheet prefetch" type="text/css">
        
 <style>
 .msg_receive{
    margin-left:40px;
}
.panel1{
  box-shadow: 0px 0px 20px 1px rgba(0,0,0,0.2);
  border-radius:12px;
}
.chat-box{
    height:400px;
    position: fixed;
    bottom: 0;
  overflow-y:scroll;
  font-family: Lato, sans-serif !important;
    
}
.msg {
    margin-right: -24%;
}

.chat-window{
    right:0;
    position:fixed;
    float:right;
    margin-left:10px;
}
.chat-window > div > .panel1{
    border-radius: 5px 5px 0 0;
}
.msg_container_base{
  background: #ececec;
  
  margin: 0;
  padding: 0 10px 10px;
  max-height:300px;
  overflow-x:hidden;
}
.top-bar {
  background: #666;
  color: white;
  padding: 10px;
  position: relative;
  overflow: hidden;
}
.msg_sent{
    margin-right:0;
    background-color:#0d416b!important;
    color:#ffffff !important;
      border-radius: 15px 5px 5px !important;
}
.messages  {
  padding: 5px;
  border-radius: 5px 5px 15px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  max-width:100%;
}
.messages .msg_sent{
    padding:15%;
} 

.messages > p {
   margin: 0 7px;
border-radius: 0px;
font-size: 14px;
  }
.messages > time {
    font-size: 11px;
    color: #ccc;
}
.msg_container {
    padding: 10px;
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
    position: relative;
     padding:0;
    margin-right:17px;
}

.panel-default1 >.panel-heading1 {
    color:#ffffff ;
    background-color:#232527;
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
.panel-footer1 .send {
    color: #8c8c8c;
    background-color: transparent;
    padding: 13px 12px 12px 11px;
    border-radius: 50px;
    font-size: 13pt;
    margin-right: -10px;
}

 .panel-footer1 .name {
  margin: 0 0 0 20px;
  text-transform: uppercase;
  font-size: 13pt;
  color:#515151;
}

.panel-footer1 .right {
  position: absolute;
  right: 40px;
}
.write-message {
    border: none !important;
    width: 95%;
    resize: none;
    padding :8px 0px;
    white-space: normal;
    word-wrap: break-word;
    font-size: 15px;
    overflow-x: hidden;
}

.panel-footer1 *::-webkit-input-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
}
.panel-footer1 input *:-moz-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
}
.panel-footer1 input *::-moz-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
  margin-left:5px;
}
.panel-footer1 input *:-ms-input-placeholder {
  color: #C0C0C0;
  font-size: 13pt;
}
.panel-footer1 {
    padding: 0px 18px;
    border-top: 0px solid transparent;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    background-color: #ffffff;
    height: 40px;
    border-radius:10px;
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
  .base_receive {
     padding-right: 33%;
     margin-left: -10px;
}
.panel-title1{
    margin-top:-24px;
    font-size:17px;
    position : absolute;
    margin-left: 25px;}
textarea1:focus, input:focus{
    outline: none;
}
.try {
  cursor: pointer;
  text-align: center;
  width: 10%;
  height: 40px;
  background-color:#ef4048;
  border-radius: 38px;
  padding-top: 8px;
  position: inherit;
  bottom: 3%;right:1%;
  cursor: pointer;
  font-size:17px;
  line-height:1.52 !important;
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
  .badge1 {
    min-width: 23px!important;
    padding: 5px 7px!important;
    border-radius:12px;
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
        to{margin-right:-10px;}
    }
    
    -webkit-@keyframes holder {
        from{margin-right:-1600px;}
        to{margin-right:-10px;}
    }
 textarea1 {
    resize: none;
    border:none !important;
    width:100%
}
.form-control1:focus {
    border-color: #66afe9;
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0), 0 0 8px rgba(0,0,0,0) !important; 
}
#cin::-webkit-scrollbar-thumb{

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
.msg_receive > p{
    background:#00aae7;
    color:#fff;
}
.chatbox{
    float: left;
    width: 25%;
    padding: 1%;
}

.sidebar{
    float: right;
    width: 350px;
    height: 20px;
    top: 15px;
    left: 70%;
    border: 1px solid red;
}
.content{
    height: 800px;
}
footer.outer{
    clear: both;
    margin-top: 30px;
}
</style>
</head>
   
<body class="">
    <header>
        <?php include '../headerm.php';?>
    </header>


<div class="sticky sidebar">
    This is sidebar
    <div class="row chat-window col-xs-5 col-md-3 rude chat-box" id="chat_window_1" style="margin-right:-1600px; margin-top:-75px;right:0;position:fixed;
    float:right;
    margin-left:10px;margin-bottom: 50px" >
   
        <div class="col-xs-12 col-md-12">
        	<div class="panel1 panel-default1">
                <div class="panel-heading1 top-bar">
                    <div class="col-md-12 col-xs-12">
                        <img class="img-responsive chat-image" src="Mira.svg" alt="mira" style="height:35px;margin-left:-16px;"/>
                        <center> <h3 class="panel-title1"><strong>Say Hi to Mira!</strong></h3></center>
                       
                    </div>
                   
                </div>
                <div class="panel-body msg_container_base">
                
                
                
                 <div class="chat-container" id="chat-container">
<form class="form-horizontal" role="form"><br>
	   <div class="form-group">
	     
		<div class="col-sm-12">
	      <input type="name" class="form-control form-control1 " id="name" placeholder="Name" >
		</div>
	    </div>
	  
	 
	   <div class="form-group">
	   
		<div class="col-sm-12">
	      <input type="text" class="form-control form-control1" placeholder="Email Id">
		</div>
	    </div>
	    
	    <div class="form-group">
	      
		<div class="col-sm-12">
	      <input type="text" class="form-control form-control1" placeholder="Designation">
		</div>
	    </div>
	    
	    <div class="form-group">
	     
		<div class="col-sm-12">
	      <input type="text" class="form-control form-control1" placeholder="Organisation">
		</div>
	    </div><br>
	    	    <div class="form-group">

	   <div class="col-sm-12">
	      
	     <button onclick="ra(); return false;" class="col-sm-12 btn btn-success btnsub" id="play">Submit</button>
	     <button class="btn btn-default btnsub">Submit</button>
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
                .left-time{float:left;margin-left: 4em;width:75%!important;}
                .left-time h5{font-size:9px!important;}
                .time{width:75%!important;}
               .time h5{font-size:9px!important;}
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
                        <div class="msg">
                            <div class="messages msg_receive">
                                 <p>I'm Miracle's innovation research associate a bot that helps to explore our new technologies </p>
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
                                <p>Let me know how can I help you ?</p>
                            </div>
                        </div>
                         <div class="col-md-2 col-xs-2 avatar left-time">
                          <h5>Just Now</h5>
                        </div>
                    </div>
                </div>
            </div>
                <div class="panel-footer1 pannel-chat" id="pannel-chat">
                    <div class="input-group">
                                 
                                      <textarea class="write-message textarea1"  id="cin" cols="1" rows="1" placeholder="Chat with MIRA"></textarea>
                        <span class="input-group-btn">
                     <i class="icon send fa fa-paper-plane-o clickable " style="margin-top: -4px;" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
    		</div>
        
        </div>
        
    </div>

    <div onclick="viewSomething()" class="try" style="width:130px!important;
    float: right;
    margin-bottom: 30px;">
    <span class="textual">
        <span><i class="fa fa-commenting fa-1x" aria-hidden="true"></i></span><strong>  Ask MIRA! </strong>
    </span>
    </div>

</div>
<div class="main content"></div>

<footer class="outer">
    <div class="sticky-stopper"></div>
    <?php include 'footer.php'; ?>
</footer>


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
        $('.textual').html('<span class="fa fa-commenting fa-1x"></span><strong style="font-family:Lato, sans-serif !important;width:130px!important">&nbsp;Ask MIRA!</strong><span class="badge1 badge-notify">3</span>');
         $(this).animate({
    width: "130px",
    backgroundColor: "#000000"
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



    document.getElementById('pannel-out').style.display='block';
    document.getElementById('chat-container').style.display='none';
    document.getElementById('pannel-chat').style.display='block';
    
    
}

</script>
<script>
    $(document).ready(function(){
    $('#play').on('click',function(){
            $('.rude').addClass('rocky');
       })
});

</script>

<script>
$( document ).ready(function() {
  console.log( "document ready!" );

  var $sticky = $('.sticky');
  var $stickyrStopper = $('.sticky-stopper');
  if (!!$sticky.offset()) { // make sure ".sticky" element exists

    var generalSidebarHeight = $sticky.innerHeight();
    var stickyTop = $sticky.offset().top;
    var stickOffset = 600;
    var stickyStopperPosition = $stickyrStopper.offset().top;
    var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
    var diff = stopPoint + stickOffset;

    $(window).scroll(function(){ // scroll event
      var windowTop = $(window).scrollTop(); // returns number

      if (stopPoint < windowTop) {
          $sticky.css({ position: 'absolute', top: diff });
      } else if (stickyTop < windowTop+stickOffset) {
          $sticky.css({ position: 'fixed', top: stickOffset });
      } else {
          $sticky.css({position: 'absolute', top: 'initial'});
      }
    });

  }
});
</script>
</body>


</html>
