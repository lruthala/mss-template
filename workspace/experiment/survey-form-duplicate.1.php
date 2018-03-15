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
        <!--<link href="../boostrap-slider/css/boostrap-slider.css" rel="stylesheet">-->
        <script src="../js/custom.js" type="text/javascript"></script>
        <!--range slider link-->
        <link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>
        <!--range slider link-->
        <script src="../js/Validation.js" type="text/javascript"></script>
            <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <!--<script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
        <!--<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>-->
        <!--<link href="/resources/demos/style.css" rel="stylesheet">-->
        <link href="../images/favicon.ico" rel="shortcut icon">
        
        <link rel="script">
         	<link rel="stylesheet" href="../../NewFolder/css/bootstrap.1.css" type="text/css" />
         	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
           <style>
          #footer{margin-top:0px!important;}
          #socialHover{padding-left:48%!important;}
</style>
    </head>
    <body>
  <?php include '../headerm.php';?>
  

        
        <?php include '../footer.php';?>

              
  
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