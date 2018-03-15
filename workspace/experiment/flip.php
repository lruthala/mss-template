<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<head>
<style>
.front{
    background-color:#ef4048;
    padding:40%;
    
    }
  
    .clicked {
     background-color:#2325275c;
}
</style>
</head>
<body>

  <div class="container" >
  <div class="row">
  <div class="col-sm-4">
    <div class="front">
  <p class="firstintro" style="color:#ffffff;font-size:30px;margin-left:-77px;">haiiihaiiihaiiihaiiiiii</p>
   <center> <i class="fa fa-check-circle-o fa-5x icon1" aria-hidden="true" style="color:#232527;margin-top:-22px;display:none;"></i></center>

    
    </div>
   </div>
   <div class="col-sm-4">
     
   </div>
     <div class="col-sm-4">
      
   </div>
   </div>
  </div>
</section>
<script>
$(document).ready(function(){
    $(".front").click(function(){
        $(".icon1").show();
        $(".icon1").css("margin-top", "-135px");
        
          $(".front").toggleClass('clicked');
    
});

});
</script>
</body>
</html>