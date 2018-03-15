<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.head{
background-color: #00aae726;
margin-top: -114px;
width: 377px;
margin-left: -112px;
max-height: 200px;
height: 229px;
max-height: 300px;
padding: 10%;
  }
#head1{
padding:20%;
background-color:#0d416b;
  
}
.head2{
padding:20%;
background-color:#8c8c8c;
  
}
.overlay{
    background-color:#ef4048;
      height: 161px;
  max-height:200px;
   padding:10%;
   }
</style>
</head>
<body>
<div class="container">
<div clas="row">
<div class="col-sm-4 overlay">
<div class="ox">
<p style="color:#ffffff">This is miracle</p>


<center> <i class="fa fa-check-circle-o fa-5x icon1" aria-hidden="true" ></i></center>

</div>
</div>
<div class="col-sm-4">
<div id="head1" onclick="myFunction()">
<p style="color:#ffffff">This is miracle</p>
<center> <i class="fa fa-check-circle-o fa-5x icon1" aria-hidden="true" style="display:none;"></i></center>
</div>
</div>
<div class="col-sm-4">
<div class="head2">
<p style="color:#ffffff">This is miracle</p>
<center> <i class="fa fa-check-circle-o fa-5x icon1" aria-hidden="true" style="display:none;"></i></center>
</div>
</div>
</div>
</div>
 <script>
 $(document).ready(function(){
     $(".overlay").click(function(){
      $(".ox").addClass("head");
        
     });
 });
 </script>
</body>
</html>